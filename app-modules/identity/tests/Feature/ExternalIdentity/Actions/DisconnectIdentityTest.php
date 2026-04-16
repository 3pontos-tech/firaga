<?php

declare(strict_types=1);

use He4rt\Identity\ExternalIdentity\Actions\DisconnectIdentity;
use He4rt\Identity\ExternalIdentity\Models\ExternalIdentity;
use He4rt\Identity\ExternalIdentity\Models\IdentityResource;

describe('DisconnectIdentity action', function (): void {
    test('sets disconnected_at and soft-deletes the record', function (): void {
        $identity = ExternalIdentity::factory()->create();
        $action = resolve(DisconnectIdentity::class);

        $action->handle($identity);

        $identity->refresh();

        expect($identity->trashed())->toBeTrue()
            ->and($identity->disconnected_at)->not->toBeNull();
    });

    test('clears credentials on disconnect', function (): void {
        $identity = ExternalIdentity::factory()->create();
        $action = resolve(DisconnectIdentity::class);

        $action->handle($identity);

        $identity->refresh();

        expect($identity->credentials->accessToken)->toBeNull()
            ->and($identity->credentials->refreshToken)->toBeNull();
    });

    test('is idempotent for already-disconnected identities', function (): void {
        $identity = ExternalIdentity::factory()->disconnected()->create();
        $action = resolve(DisconnectIdentity::class);

        // Should not throw
        $action->handle($identity);

        expect($identity->refresh()->trashed())->toBeTrue();
    });

    test('preserves identity resources on disconnect', function (): void {
        $identity = ExternalIdentity::factory()->create();

        $resource = IdentityResource::factory()->create([
            'external_identity_id' => $identity->id,
        ]);

        resolve(DisconnectIdentity::class)->handle($identity);

        $identity->refresh();

        expect($identity->trashed())->toBeTrue()
            ->and(IdentityResource::query()->where('external_identity_id', $identity->id)->count())->toBe(1)
            ->and(IdentityResource::query()->find($resource->id))->not->toBeNull();
    });
});
