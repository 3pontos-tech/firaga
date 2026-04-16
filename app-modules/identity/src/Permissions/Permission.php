<?php

declare(strict_types=1);

namespace He4rt\Identity\Permissions;

use App\Models\Concerns\InteractsWithRequest;
use He4rt\Identity\Database\Factories\Permissions\PermissionFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Permission\Models\Permission as BasePermission;

/**
 * @property string $guard_name
 * @property string $name
 * @property string $resource
 * @property string $action
 * @property string $resource_group
 * @property-read string $formatted_name
 * @property-read string $resource_model
 */
class Permission extends BasePermission
{
    /** @use HasFactory<PermissionFactory> */
    use HasFactory;
    use HasUuids;
    use InteractsWithRequest;
    use LogsActivity;

    protected $table = 'identity_permissions';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName(self::class)
            ->logAll()
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs()
            ->logExcept($this->hidden);
    }

    /** @return Attribute<string, void> */
    protected function resourceModel(): Attribute
    {
        return Attribute::make(
            get: fn () => str($this->resource)->explode('\\')->last()
        );
    }

    /** @return Attribute<string, void> */
    protected function formattedName(): Attribute
    {
        return Attribute::make(
            get: fn () => sprintf(
                '%s-%s-%s-%s', $this->resource_group, $this->resource_model, $this->action, $this->name
            )
        );
    }
}
