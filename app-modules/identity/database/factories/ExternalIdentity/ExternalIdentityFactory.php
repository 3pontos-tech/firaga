<?php

declare(strict_types=1);

namespace He4rt\Identity\Database\Factories\ExternalIdentity;

use He4rt\Identity\ExternalIdentity\Data\ClientAccessManager;
use He4rt\Identity\ExternalIdentity\Enums\CredentialsType;
use He4rt\Identity\ExternalIdentity\Enums\IdentityProvider;
use He4rt\Identity\ExternalIdentity\Enums\IdentityType;
use He4rt\Identity\ExternalIdentity\Models\ExternalIdentity;
use He4rt\Identity\Teams\Team;
use He4rt\Identity\Users\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Crypt;

/**
 * @extends Factory<ExternalIdentity>
 */
class ExternalIdentityFactory extends Factory
{
    protected $model = ExternalIdentity::class;

    public function definition(): array
    {
        return [
            'team_id' => Team::factory(),
            'type' => IdentityType::External,
            'provider' => IdentityProvider::GitHub,
            'credentials_type' => CredentialsType::OAuth2,
            'credentials' => ClientAccessManager::make(
                accessToken: Crypt::encrypt(fake()->sha256()),
                refreshToken: Crypt::encrypt(fake()->sha256()),
                expiresIn: Crypt::encrypt((string) 3600),
            ),
            'connected_by' => User::factory(),
            'connected_at' => now(),
        ];
    }

    public function disconnected(): static
    {
        return $this->state(fn () => [
            'disconnected_at' => now(),
        ]);
    }
}
