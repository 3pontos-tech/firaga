<?php

declare(strict_types=1);

namespace He4rt\Identity\ExternalIdentity\Contracts;

use He4rt\Identity\ExternalIdentity\Enums\IdentityProvider;
use InvalidArgumentException;

class IdentityDriverRegistry
{
    /** @var array<string, IdentityDriver> */
    private array $drivers = [];

    public function register(IdentityDriver $driver): void
    {
        $this->drivers[$driver->provider()->value] = $driver;
    }

    public function resolve(IdentityProvider $provider): IdentityDriver
    {
        if (!isset($this->drivers[$provider->value])) {
            throw new InvalidArgumentException('No driver registered for provider: '.$provider->value);
        }

        return $this->drivers[$provider->value];
    }

    public function has(IdentityProvider $provider): bool
    {
        return isset($this->drivers[$provider->value]);
    }
}
