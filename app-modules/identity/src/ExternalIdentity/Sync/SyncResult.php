<?php

declare(strict_types=1);

namespace He4rt\Identity\ExternalIdentity\Sync;

class SyncResult
{
    public function __construct(
        public readonly int $total,
        public readonly int $created,
        public readonly int $updated,
        public readonly int $errors,
    ) {}

    public function merge(self $other): self
    {
        return new self(
            total: $this->total + $other->total,
            created: $this->created + $other->created,
            updated: $this->updated + $other->updated,
            errors: $this->errors + $other->errors,
        );
    }
}
