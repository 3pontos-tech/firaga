<?php

declare(strict_types=1);

namespace He4rt\Identity\Database\Factories\ExternalIdentity;

use He4rt\Identity\ExternalIdentity\Enums\IdentityCapability;
use He4rt\Identity\ExternalIdentity\Models\ExternalIdentity;
use He4rt\Identity\ExternalIdentity\Models\IdentityResource;
use He4rt\Identity\Teams\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<IdentityResource>
 */
class IdentityResourceFactory extends Factory
{
    protected $model = IdentityResource::class;

    public function definition(): array
    {
        return [
            'external_identity_id' => ExternalIdentity::factory(),
            'capability' => IdentityCapability::Projects,
            'external_resource_id' => (string) fake()->randomNumber(6),
            'external_resource_data' => ['name' => fake()->company()],
            'resourceable_type' => 'teams',
            'resourceable_id' => Team::factory(),
        ];
    }

    public function forCompanies(): static
    {
        return $this->state(fn () => [
            'capability' => IdentityCapability::Companies,
        ]);
    }
}
