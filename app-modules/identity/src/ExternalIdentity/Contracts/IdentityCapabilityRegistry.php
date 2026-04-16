<?php

declare(strict_types=1);

namespace He4rt\Identity\ExternalIdentity\Contracts;

use He4rt\Identity\ExternalIdentity\Enums\IdentityCapability;

class IdentityCapabilityRegistry
{
    /** @var array<string, class-string> */
    private array $modelMap = [];

    /**
     * @param  class-string  $modelClass
     */
    public function register(IdentityCapability $capability, string $modelClass): void
    {
        $this->modelMap[$capability->value] = $modelClass;
    }

    /**
     * @return class-string|null
     */
    public function getModelClass(IdentityCapability $capability): ?string
    {
        return $this->modelMap[$capability->value] ?? null;
    }
}
