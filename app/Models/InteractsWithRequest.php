<?php

declare(strict_types=1);

namespace App\Models\Concerns;

use Spatie\Activitylog\Models\Activity;

trait InteractsWithRequest
{
    public function tapActivity(Activity $activity, string $eventName): void
    {
        $activity->properties = $activity->properties->merge(array_filter([
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]));
    }
}
