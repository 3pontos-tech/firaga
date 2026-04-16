<?php

declare(strict_types=1);

namespace He4rt\Identity;

use He4rt\Identity\ExternalIdentity\Contracts\IdentityCapabilityRegistry;
use He4rt\Identity\ExternalIdentity\Contracts\IdentityDriverRegistry;
use He4rt\Identity\ExternalIdentity\Models\ExternalIdentity;
use He4rt\Identity\ExternalIdentity\Models\IdentityResource;
use He4rt\Identity\ExternalIdentity\Sync\SyncRegistry;
use He4rt\Identity\Permissions\Commands\SyncPermissions\SyncPermissionsCommand;
use He4rt\Identity\Permissions\Permission;
use He4rt\Identity\Permissions\Role;
use He4rt\Identity\Teams\Team;
use He4rt\Identity\Users\User;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class IdentityServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(IdentityDriverRegistry::class);
        $this->app->singleton(IdentityCapabilityRegistry::class);
        $this->app->singleton(SyncRegistry::class);
        $this->commands(SyncPermissionsCommand::class);

        $this->mergeConfigFrom(__DIR__.'/../config/identity.php', 'identity');
        $this->mergeConfigFrom(__DIR__.'/../config/permissions.php', 'permission');
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations/*');

        $this->loadTranslationsFrom(__DIR__.'/../lang/teams', 'teams');
        $this->loadTranslationsFrom(__DIR__.'/../lang/users', 'users');

        $this->loadRoutesFrom(__DIR__.'/../resources/routes/web.php');

        Relation::enforceMorphMap([
            'user' => User::class,
            'external_identity' => ExternalIdentity::class,
            'identity_resource' => IdentityResource::class,
            'roles' => Role::class,
            'permissions' => Permission::class,
            'teams' => Team::class,
        ]);
    }
}
