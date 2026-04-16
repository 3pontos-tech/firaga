<?php

declare(strict_types=1);

namespace He4rt\Identity\ExternalIdentity\Capabilities;

use He4rt\Identity\ExternalIdentity\Enums\IdentityCapability;

class IdentityCapabilityMap
{
    /** @var array<string, true> */
    private array $capabilities = [];

    public static function make(): self
    {
        return new self;
    }

    public function supports(IdentityCapability $capability): self
    {
        $this->capabilities[$capability->value] = true;

        return $this;
    }

    public function has(IdentityCapability $capability): bool
    {
        return isset($this->capabilities[$capability->value]);
    }

    /** @return array<string> */
    public function all(): array
    {
        return array_keys($this->capabilities);
    }
}
