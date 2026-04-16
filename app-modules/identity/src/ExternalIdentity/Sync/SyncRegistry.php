<?php

declare(strict_types=1);

namespace He4rt\Identity\ExternalIdentity\Sync;

use InvalidArgumentException;

class SyncRegistry
{
    /** @var array<string, SyncDefinition> */
    private array $definitions = [];

    public function register(string $key, SyncDefinition $definition): void
    {
        $this->definitions[$key] = $definition;
    }

    public function get(string $key): SyncDefinition
    {
        throw_unless(isset($this->definitions[$key]), InvalidArgumentException::class, 'No sync definition registered for key: '.$key);

        return $this->definitions[$key];
    }

    public function has(string $key): bool
    {
        return isset($this->definitions[$key]);
    }
}
