<?php

declare(strict_types=1);

namespace He4rt\Admin\Filament\Resources\Users;

use App\Enums\NavigationGroup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Guava\FilamentKnowledgeBase\Contracts\HasKnowledgeBase;
use He4rt\Admin\Filament\Resources\Users\Pages\CreateUser;
use He4rt\Admin\Filament\Resources\Users\Pages\EditUser;
use He4rt\Admin\Filament\Resources\Users\Pages\ListUsers;
use He4rt\Admin\Filament\Resources\Users\Schemas\UserForm;
use He4rt\Admin\Filament\Resources\Users\Schemas\UserInfolist;
use He4rt\Admin\Filament\Resources\Users\Tables\UsersTable;
use He4rt\Identity\Users\User;
use UnitEnum;

class UserResource extends Resource implements HasKnowledgeBase
{
    protected static ?string $model = User::class;

    protected static ?string $slug = 'users';

    protected static ?string $recordTitleAttribute = 'name';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUser;

    protected static string|UnitEnum|null $navigationGroup = NavigationGroup::UserManagement;

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return UserForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return UserInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UsersTable::table($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListUsers::route('/'),
            'create' => CreateUser::route('/create'),
            'edit' => EditUser::route('/{record}/edit'),
        ];
    }

    /**
     * @return string[]
     */
    public static function getDocumentation(): array
    {
        return [
            'users.managing-users',
            'users.authentication',
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'email'];
    }

    public static function getModelLabel(): string
    {
        return __('users::labels.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('users::labels.plural');
    }
}
