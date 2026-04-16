<?php

declare(strict_types=1);

namespace He4rt\Identity\Teams\Concerns;

use Filament\Panel;
use He4rt\Identity\Teams\Team;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Support\Collection;

trait InteractsWithTenants
{
    /**
     * @return BelongsToMany<Team, $this, Pivot>
     */
    public function teams(): BelongsToMany
    {
        return $this
            ->belongsToMany(
                Team::class,
                'identity_team_user',
                'user_id',
                'team_id'
            )->withTimestamps();
    }

    /**
     * @return Collection<int,Team>
     */
    public function getTenants(Panel $panel): Collection
    {
        return $this->teams;
    }

    public function canAccessTenant(Model $tenant): bool
    {
        return $this->teams()->whereKey($tenant)->exists();
    }
}
