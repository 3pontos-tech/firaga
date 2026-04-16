<?php

declare(strict_types=1);

namespace He4rt\Identity\ExternalIdentity\Concerns;

use He4rt\Identity\ExternalIdentity\Models\ExternalIdentity;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasIdentityTenantRelationships
{
    /**
     * @return HasMany<ExternalIdentity, $this>
     */
    public function externalIdentities(): HasMany
    {
        return $this->hasMany(ExternalIdentity::class);
    }

    /**
     * @return HasMany<ExternalIdentity, $this>
     */
    public function activeExternalIdentities(): HasMany
    {
        return $this->externalIdentities()
            ->whereNotNull('connected_at')
            ->whereNull('disconnected_at');
    }
}
