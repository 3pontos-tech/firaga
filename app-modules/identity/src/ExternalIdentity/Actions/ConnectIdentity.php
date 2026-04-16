<?php

declare(strict_types=1);

namespace He4rt\Identity\ExternalIdentity\Actions;

use He4rt\Identity\ExternalIdentity\Data\ClientAccessManager;
use He4rt\Identity\ExternalIdentity\Enums\CredentialsType;
use He4rt\Identity\ExternalIdentity\Enums\IdentityProvider;
use He4rt\Identity\ExternalIdentity\Models\ExternalIdentity;
use He4rt\Identity\Teams\Team;
use He4rt\Identity\Users\User;

class ConnectIdentity
{
    public function handle(
        Team $team,
        User $user,
        IdentityProvider $provider,
        ClientAccessManager $credentials,
        ?string $externalAccountId = null,
    ): ExternalIdentity {
        $identity = ExternalIdentity::withTrashed()
            ->where('team_id', $team->id)
            ->where('provider', $provider)
            ->first();

        if ($identity) {
            if ($identity->trashed()) {
                $identity->restore();
            }

            $identity->update([
                'credentials_type' => CredentialsType::OAuth2,
                'credentials' => $credentials,
                'external_account_id' => $externalAccountId,
                'connected_by' => $user->id,
                'connected_at' => now(),
                'disconnected_at' => null,
            ]);

            return $identity->refresh();
        }

        return ExternalIdentity::query()->create([
            'team_id' => $team->id,
            'type' => $provider->getType(),
            'provider' => $provider,
            'credentials_type' => CredentialsType::OAuth2,
            'credentials' => $credentials,
            'external_account_id' => $externalAccountId,
            'connected_by' => $user->id,
            'connected_at' => now(),
        ]);
    }
}
