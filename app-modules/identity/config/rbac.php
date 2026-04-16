<?php

declare(strict_types=1);

use He4rt\Identity\Permissions\PermissionsEnum;
use He4rt\Identity\Permissions\Roles;
use He4rt\Identity\Users\User;

return [
    'permissions' => [
        Roles::SuperAdmin->value => [
            User::class => PermissionsEnum::cases(),
        ],
    ],
];
