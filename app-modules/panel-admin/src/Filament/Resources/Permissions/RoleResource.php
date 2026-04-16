<?php

declare(strict_types=1);

namespace He4rt\Admin\Filament\Resources\Permissions;

use App\Enums\NavigationGroup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Guava\FilamentKnowledgeBase\Contracts\HasKnowledgeBase;
use He4rt\Admin\Filament\Resources\Permissions\Pages\CreateRole;
use He4rt\Admin\Filament\Resources\Permissions\Pages\EditRole;
use He4rt\Admin\Filament\Resources\Permissions\Pages\ListRoles;
use He4rt\Admin\Filament\Resources\Permissions\Schemas\RoleForm;
use He4rt\Admin\Filament\Resources\Permissions\Schemas\RoleInfolist;
use He4rt\Admin\Filament\Resources\Permissions\Tables\RolesTable;
use He4rt\Identity\Permissions\Role;
use UnitEnum;

class RoleResource extends Resource implements HasKnowledgeBase
{
    protected static ?string $model = Role::class;

    protected static ?string $slug = 'roles';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedShieldCheck;

    protected static string|UnitEnum|null $navigationGroup = NavigationGroup::UserManagement;

    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return RoleForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return RoleInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RolesTable::table($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListRoles::route('/'),
            'create' => CreateRole::route('/create'),
            'edit' => EditRole::route('/{record}/edit'),
        ];
    }

    /**
     * @return string[]
     */
    public static function getDocumentation(): array
    {
        return [
            'users.roles',
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }
}
