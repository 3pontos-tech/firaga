<?php

declare(strict_types=1);

namespace He4rt\Identity\ExternalIdentity\Concerns;

use He4rt\Identity\ExternalIdentity\Models\IdentityResource;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * @property-read IdentityResource|null $identityResource
 */
trait HasIdentityResource
{
    /**
     * @return MorphOne<IdentityResource, $this>
     */
    public function identityResource(): MorphOne
    {
        return $this->morphOne(IdentityResource::class, 'resourceable');
    }
}
