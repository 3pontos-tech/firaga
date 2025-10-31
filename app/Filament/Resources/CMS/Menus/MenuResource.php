<?php

namespace App\Filament\Resources\CMS\Menus;

use App\Filament\Resources\CMS\Menus\Pages\CreateMenu;
use App\Filament\Resources\CMS\Menus\Pages\EditMenu;
use App\Filament\Resources\CMS\Menus\Pages\ListMenus;
use App\Models\CMS\Menu;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationGroup(): ?string
    {
        return __('filament.pages');
    }

    public static function form(Schema $schema): Schema
    {

        $parametersTab = [
            TextInput::make('title')
                ->label(__('filament.menu_title'))
                ->live(debounce: 500)
                ->afterStateUpdated(fn (Set $set, ?string $state): mixed => $set('slug', Str::slug(strval($state))))
                ->required(),
            TextInput::make('slug')
                ->label(__('filament.menu_slug'))
                ->required(),
        ];

        return $schema
            ->components([
                Section::make(__('Menu'))
                    ->columns(1)
                    ->schema($parametersTab),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        $columns = [
            TextColumn::make('title')
                ->label(__('filament.menu_title')),
        ];

        return $table
            ->columns($columns)
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()->label(__('filament.delete')),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMenus::route('/'),
            'create' => CreateMenu::route('/create'),
            'edit' => EditMenu::route('/{record}/edit'),
        ];
    }
}
