<?php

namespace App\Filament\Resources\CMS;

use App\Filament\Resources\CMS\MenuResource\Pages\CreateMenu;
use App\Filament\Resources\CMS\MenuResource\Pages\EditMenu;
use App\Filament\Resources\CMS\MenuResource\Pages\ListMenus;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Webid\Druid\Facades\Druid;
use Webid\Druid\Models\Menu;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Menus';

    public static function form(Form $form): Form
    {

        $parametersTab = [
            TextInput::make('title')
                ->label(__('Title'))
                ->live(debounce: 500)
                ->afterStateUpdated(fn (Set $set, ?string $state): mixed => $set('slug', Str::slug(strval($state))))
                ->required(),
            TextInput::make('slug')
                ->label(__('Slug'))
                ->required(),
        ];

        return $form
            ->schema([
                Section::make(__('Menu'))
                    ->columns(1)
                    ->schema($parametersTab),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        $columns = [
            TextColumn::make('title')
                ->label(__('Title')),
        ];

        if (Druid::isMultilingualEnabled()) {
            $columns[] = ViewColumn::make('translations')->view('druid::admin.menu.translations');
        }

        return $table
            ->columns($columns)
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            Druid::menuItemsRelationManager(),
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMenus::route('/'),
            'create' => CreateMenu::route('/create'),
            'edit' => EditMenu::route('/{record}/edit'),
        ];
    }

    public static function canAccess(): bool
    {
        return Druid::isMenuModuleEnabled();
    }
}
