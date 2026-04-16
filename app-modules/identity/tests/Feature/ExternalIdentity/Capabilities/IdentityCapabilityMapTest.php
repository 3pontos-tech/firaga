<?php

declare(strict_types=1);

use He4rt\Identity\ExternalIdentity\Capabilities\IdentityCapabilityMap;
use He4rt\Identity\ExternalIdentity\Enums\IdentityCapability;

describe('IdentityCapabilityMap', function (): void {
    test('has returns true for supported capabilities', function (): void {
        $map = IdentityCapabilityMap::make()
            ->supports(IdentityCapability::Projects)
            ->supports(IdentityCapability::Companies);

        expect($map->has(IdentityCapability::Projects))->toBeTrue()
            ->and($map->has(IdentityCapability::Companies))->toBeTrue();
    });

    test('has returns false for unsupported capabilities', function (): void {
        $map = IdentityCapabilityMap::make()
            ->supports(IdentityCapability::Projects);

        expect($map->has(IdentityCapability::Companies))->toBeFalse();
    });

    test('all returns all supported capability values', function (): void {
        $map = IdentityCapabilityMap::make()
            ->supports(IdentityCapability::Projects)
            ->supports(IdentityCapability::Companies);

        expect($map->all())->toBe(['projects', 'companies']);
    });

    test('all returns empty array when no capabilities supported', function (): void {
        $map = IdentityCapabilityMap::make();

        expect($map->all())->toBeEmpty();
    });

    test('supports is fluent and returns self', function (): void {
        $map = IdentityCapabilityMap::make();
        $result = $map->supports(IdentityCapability::Projects);

        expect($result)->toBe($map);
    });
});
