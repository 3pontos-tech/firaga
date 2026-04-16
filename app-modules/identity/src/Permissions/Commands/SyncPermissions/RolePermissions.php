<?php

declare(strict_types=1);

namespace He4rt\Identity\Permissions\Commands\SyncPermissions;

use He4rt\Identity\Permissions\PermissionsEnum;

readonly class RolePermissions
{
    /**
     * @param  array<class-string, list<PermissionsEnum>>  $resources
     */
    public function __construct(
        public string $role,
        public array $resources,
    ) {}
}
