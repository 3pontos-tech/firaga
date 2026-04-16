<?php

declare(strict_types=1);

namespace He4rt\Identity\ExternalIdentity\Contracts;

use He4rt\Identity\ExternalIdentity\Capabilities\IdentityCapabilityMap;
use He4rt\Identity\ExternalIdentity\Data\ClientAccessManager;
use He4rt\Identity\ExternalIdentity\Enums\IdentityProvider;
use Symfony\Component\HttpFoundation\RedirectResponse;

interface IdentityDriver
{
    public function provider(): IdentityProvider;

    public function capabilities(): IdentityCapabilityMap;

    public function redirect(string $tenantId): RedirectResponse;

    /**
     * Handle the OAuth callback and return a ClientAccessManager with encrypted tokens.
     */
    public function callback(): ClientAccessManager;
}
