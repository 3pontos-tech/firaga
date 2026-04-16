<?php

declare(strict_types=1);

use He4rt\Identity\ExternalIdentity\Enums\IdentityCapability;
use He4rt\Identity\ExternalIdentity\Models\ExternalIdentity;
use He4rt\Identity\ExternalIdentity\Models\IdentityResource;
use He4rt\Identity\Teams\Team;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Context;

describe('IdentityResource model', function (): void {
    test('can be created with factory', function (): void {
        $resource = IdentityResource::factory()->create();

        expect($resource)
            ->toBeInstanceOf(IdentityResource::class)
            ->capability->toBe(IdentityCapability::Projects)
            ->external_resource_id->not->toBeEmpty();
    });

    test('belongs to an ExternalIdentity', function (): void {
        $identity = ExternalIdentity::factory()->create();
        $resource = IdentityResource::factory()->create([
            'external_identity_id' => $identity->id,
        ]);

        expect($resource->identity->is($identity))->toBeTrue();
    });

    test('resolves polymorphic resourceable to Team', function (): void {
        $team = Team::factory()->create();
        Context::add('tenant_id', $team->id);

        $identity = ExternalIdentity::factory()->create(['team_id' => $team->id]);

        $resource = IdentityResource::factory()->create([
            'external_identity_id' => $identity->id,
            'resourceable_type' => 'teams',
            'resourceable_id' => $team->id,
        ]);

        expect($resource->resourceable->is($team))->toBeTrue();
    });

    test('enforces unique constraint on identity + capability + external_resource_id', function (): void {
        $identity = ExternalIdentity::factory()->create();

        IdentityResource::factory()->create([
            'external_identity_id' => $identity->id,
            'capability' => IdentityCapability::Projects,
            'external_resource_id' => '456',
        ]);

        IdentityResource::factory()->create([
            'external_identity_id' => $identity->id,
            'capability' => IdentityCapability::Projects,
            'external_resource_id' => '456',
        ]);
    })->throws(QueryException::class);

    test('allows same external_resource_id with different capability', function (): void {
        $identity = ExternalIdentity::factory()->create();

        $r1 = IdentityResource::factory()->create([
            'external_identity_id' => $identity->id,
            'capability' => IdentityCapability::Projects,
            'external_resource_id' => '456',
        ]);

        $r2 = IdentityResource::factory()->create([
            'external_identity_id' => $identity->id,
            'capability' => IdentityCapability::Companies,
            'external_resource_id' => '456',
        ]);

        expect($r1->id)->not->toBe($r2->id);
    });

    test('restricts deletion when identity has resources', function (): void {
        $identity = ExternalIdentity::factory()->create();

        IdentityResource::factory()->create([
            'external_identity_id' => $identity->id,
        ]);

        expect(IdentityResource::query()->where('external_identity_id', $identity->id)->count())->toBe(1);

        // Force delete should be prevented by restrictOnDelete FK
        $identity->forceDelete();
    })->throws(QueryException::class);

    test('preserves resources when identity is soft-deleted', function (): void {
        $identity = ExternalIdentity::factory()->create();

        IdentityResource::factory()->create([
            'external_identity_id' => $identity->id,
        ]);

        $identity->delete(); // soft delete

        expect($identity->trashed())->toBeTrue()
            ->and(IdentityResource::query()->where('external_identity_id', $identity->id)->count())->toBe(1);
    });

    test('stores and retrieves external_resource_data as array', function (): void {
        $data = ['name' => 'Test Project', 'status' => 'active'];

        $resource = IdentityResource::factory()->create([
            'external_resource_data' => $data,
        ]);

        $fresh = IdentityResource::query()->find($resource->id);

        expect($fresh->external_resource_data)
            ->toBe($data);
    });
});
