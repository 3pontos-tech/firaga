<?php

declare(strict_types=1);

use He4rt\Identity\ExternalIdentity\Actions\ConnectIdentity;
use He4rt\Identity\ExternalIdentity\Data\ClientAccessManager;
use He4rt\Identity\ExternalIdentity\Enums\CredentialsType;
use He4rt\Identity\ExternalIdentity\Enums\IdentityProvider;
use He4rt\Identity\ExternalIdentity\Enums\IdentityType;
use He4rt\Identity\ExternalIdentity\Models\ExternalIdentity;
use He4rt\Identity\Teams\Team;
use He4rt\Identity\Users\User;
use Illuminate\Support\Facades\Context;
use Illuminate\Support\Facades\Crypt;

describe('ConnectIdentity action', function (): void {
    beforeEach(function (): void {
        $this->team = Team::factory()->create();
        $this->user = User::factory()->create();
        Context::add('tenant_id', $this->team->id);

        $this->credentials = ClientAccessManager::make(
            accessToken: Crypt::encrypt('test-access-token'),
            refreshToken: Crypt::encrypt('test-refresh-token'),
            expiresIn: Crypt::encrypt('3600'),
        );

        $this->action = resolve(ConnectIdentity::class);
    });

    test('creates a new ExternalIdentity on first connection', function (): void {
        $identity = $this->action->handle(
            team: $this->team,
            user: $this->user,
            provider: IdentityProvider::GitHub,
            credentials: $this->credentials,
        );

        expect($identity)
            ->toBeInstanceOf(ExternalIdentity::class)
            ->type->toBe(IdentityType::External)
            ->provider->toBe(IdentityProvider::GitHub)
            ->credentials_type->toBe(CredentialsType::OAuth2)
            ->connected_by->toBe($this->user->id)
            ->connected_at->not->toBeNull()
            ->disconnected_at->toBeNull();

        expect($identity->credentials->getAccessToken())->toBe('test-access-token');
    });

    test('sets external_account_id when provided', function (): void {
        $identity = $this->action->handle(
            team: $this->team,
            user: $this->user,
            provider: IdentityProvider::GitHub,
            credentials: $this->credentials,
            externalAccountId: '12345',
        );

        expect($identity->external_account_id)->toBe('12345');
    });

    test('updates existing record on reconnection', function (): void {
        // Create initial connection
        $original = $this->action->handle(
            team: $this->team,
            user: $this->user,
            provider: IdentityProvider::GitHub,
            credentials: $this->credentials,
        );

        // Disconnect
        $original->update(['disconnected_at' => now()]);

        // Reconnect with new credentials
        $newCredentials = ClientAccessManager::make(
            accessToken: Crypt::encrypt('new-access-token'),
        );

        $reconnected = $this->action->handle(
            team: $this->team,
            user: $this->user,
            provider: IdentityProvider::GitHub,
            credentials: $newCredentials,
        );

        expect($reconnected->id)->toBe($original->id)
            ->and($reconnected->disconnected_at)->toBeNull()
            ->and($reconnected->credentials->getAccessToken())->toBe('new-access-token');

        // No duplicate created
        expect(ExternalIdentity::query()->where('team_id', $this->team->id)->count())->toBe(1);
    });

    test('restores soft-deleted record on reconnection', function (): void {
        // Create and soft-delete
        $original = $this->action->handle(
            team: $this->team,
            user: $this->user,
            provider: IdentityProvider::GitHub,
            credentials: $this->credentials,
        );

        $original->delete();
        // soft-delete
        expect(ExternalIdentity::query()->where('id', $original->id)->exists())->toBeFalse();

        // Reconnect
        $restored = $this->action->handle(
            team: $this->team,
            user: $this->user,
            provider: IdentityProvider::GitHub,
            credentials: $this->credentials,
        );

        expect($restored->id)->toBe($original->id)
            ->and($restored->trashed())->toBeFalse()
            ->and($restored->disconnected_at)->toBeNull();
    });
});
