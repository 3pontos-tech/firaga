<?php

declare(strict_types=1);

namespace He4rt\Identity\Permissions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Str;

enum PermissionsEnum: string
{
    case View = 'view';
    case ViewAny = 'view_any';
    case Create = 'create';
    case Update = 'update';
    case Delete = 'delete';
    case Restore = 'restore';
    case ForceDelete = 'force_delete';

    /**
     * @param  class-string<Model>  $classPath
     */
    public function buildPermissionFor(string $classPath): string
    {
        return sprintf('%s_%s', $this->value, $this->snakeMorphAlias($classPath));
    }

    /**
     * @param  class-string<Model>  $classPath
     */
    private function snakeMorphAlias(string $classPath): string
    {
        return Str::snake((string) Relation::getMorphAlias($classPath));
    }
}
