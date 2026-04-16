<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Concerns\InteractsWithRequest;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * @template TFactory of Factory
 */
abstract class BaseModel extends Model
{
    /** @use HasFactory<TFactory> */
    use HasFactory;
    use HasUuids;
    use InteractsWithRequest;
    use LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName(static::class)
            ->logAll()
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs()
            ->logExcept($this->hidden);
    }
}
