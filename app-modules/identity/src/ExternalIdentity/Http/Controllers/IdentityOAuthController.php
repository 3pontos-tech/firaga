<?php

declare(strict_types=1);

namespace He4rt\Identity\ExternalIdentity\Http\Controllers;

use He4rt\Identity\ExternalIdentity\Actions\ConnectIdentity;
use He4rt\Identity\ExternalIdentity\Contracts\IdentityDriverRegistry;
use He4rt\Identity\ExternalIdentity\Enums\IdentityProvider;
use He4rt\Identity\Teams\Team;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class IdentityOAuthController
{
    public function connect(IdentityProvider $provider, IdentityDriverRegistry $registry): RedirectResponse
    {
        $driver = $registry->resolve($provider);
        $tenantId = filament()->getTenant()->getKey();

        return $driver->redirect($tenantId);
    }

    public function callback(
        IdentityProvider $provider,
        IdentityDriverRegistry $registry,
        ConnectIdentity $action,
        Request $request,
    ): \Illuminate\Http\RedirectResponse {
        $driver = $registry->resolve($provider);
        $credentials = $driver->callback();

        /** @var Team $team */
        $team = filament()->getTenant();

        $action->handle(
            team: $team,
            user: $request->user(),
            provider: $provider,
            credentials: $credentials,
        );

        return to_route('filament.app.pages.external-identities')
            ->with('notification', [
                'title' => $provider->getLabel().' connected successfully',
                'status' => 'success',
            ]);
    }
}
