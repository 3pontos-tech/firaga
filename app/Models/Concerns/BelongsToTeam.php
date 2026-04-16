<?php

declare(strict_types=1);

namespace App\Models\Concerns;

use He4rt\Identity\Teams\Team;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToTeam
{
    /**
     * @return BelongsTo<Team, $this>
     */
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
