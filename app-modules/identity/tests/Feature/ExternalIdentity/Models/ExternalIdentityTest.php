<?php

declare(strict_types=1);

use He4rt\Identity\ExternalIdentity\Data\ClientAccessManager;
use He4rt\Identity\ExternalIdentity\Enums\CredentialsType;
use He4rt\Identity\ExternalIdentity\Enums\IdentityCapability;
use He4rt\Identity\ExternalIdentity\Enums\IdentityProvider;
use He4rt\Identity\ExternalIdentity\Enums\IdentityType;
use He4rt\Identity\ExternalIdentity\Models\ExternalIdentity;
use He4rt\Identity\Teams\Team;
use He4rt\Identity\Users\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Context;
use Illuminate\Support\Facades\Crypt;

describe('ExternalIdentity model', function (): void {
    test('can be created with factory', function (): void {
        $identity = ExternalIdentity::factory()->create();

        expect($identity)
            ->toBeInstanceOf(ExternalIdentity::class)
            ->type->toBe(IdentityType::External)
            ->provider->toBe(IdentityProvider::GitHub)
            ->credentials_type->toBe(CredentialsType::OAuth2);
    });

    test('credentials are cast to ClientAccessManager', function (): void {
        $identity = ExternalIdentity::factory()->create();

        expect($identity->credentials)
            ->toBeInstanceOf(ClientAccessManager::class);
    });

    test('credentials decrypt access token correctly', function (): void {
        $token = 'my-secret-token';

        $identity = ExternalIdentity::factory()->create([
            'credentials' => ClientAccessManager::make(
                accessToken: Crypt::encrypt($token),
            ),
        ]);

        $fresh = ExternalIdentity::query()->withoutGlobalScopes()->find($identity->id);

        expect($fresh->credentials->getAccessToken())->toBe($token);
    });

    test('isConnected returns true when connected_at is set and disconnected_at is null', function (): void {
        $identity = ExternalIdentity::factory()->create([
            'connected_at' => now(),
            'disconnected_at' => null,
        ]);

        expect($identity->isConnected())->toBeTrue();
    });

    test('isConnected returns false when disconnected_at is set', function (): void {
        $identity = ExternalIdentity::factory()->disconnected()->create();

        expect($identity->isConnected())->toBeFalse();
    });

    test('isConnected returns false when connected_at is null', function (): void {
        $identity = ExternalIdentity::factory()->create([
            'connected_at' => null,
        ]);

        expect($identity->isConnected())->toBeFalse();
    });

    test('enforces unique constraint on team_id and provider', function (): void {
        $team = Team::factory()->create();
        Context::add('tenant_id', $team->id);

        ExternalIdentity::factory()->create([
            'team_id' => $team->id,
            'provider' => IdentityProvider::GitHub,
        ]);

        ExternalIdentity::factory()->create([
            'team_id' => $team->id,
            'provider' => IdentityProvider::GitHub,
        ]);
    })->throws(QueryException::class);

    test('connectedByUser returns the user who connected', function (): void {
        $team = Team::factory()->create();
        $user = User::factory()->create();

        $identity = ExternalIdentity::factory()->create([
            'connected_by' => $user->id,
            'team_id' => $team->id,
        ]);

        expect($identity->connectedByUser->is($user))->toBeTrue();
    });

    test('has resources relationship', function (): void {
        $identity = ExternalIdentity::factory()->create();

        expect($identity->resources()->count())->toBe(0);
    });

    test('resourcesForCapability filters by capability', function (): void {
        $identity = ExternalIdentity::factory()->create();

        expect($identity->resourcesForCapability(IdentityCapability::Projects)->count())->toBe(0);
    });
});
