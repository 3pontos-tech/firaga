<?php

namespace App\Filament\Resources\CMS\Categories;

use App\Filament\Resources\CMS\Categories\Pages\CreateCategory;
use App\Filament\Resources\CMS\Categories\Pages\EditCategory;
use App\Filament\Resources\CMS\Categories\Pages\ListCategories;
use App\Filament\Resources\CMS\Categories\RelationManagers\PostsRelationManager;
use App\Models\CMS\Category;
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

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-tag';

    protected static ?string $recordTitleAttribute = 'name';

    protected static string|\UnitEnum|null $navigationGroup = 'Blog';

    protected static ?int $navigationSort = 1;

    protected static ?string $label = null;

    public static function getLabel(): ?string
    {
        return __('filament.category');
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('Parameters'))
                    ->schema([
                        TextInput::make('name')
                            ->label(__('filament.category_name'))
                            ->live(onBlur: true)
                            ->afterStateUpdated(
                                fn (string $operation, $state, Set $set): mixed => $operation === 'create'
                                    ? $set('slug', Str::slug($state)) : null
                            )
                            ->required(),
                        TextInput::make('slug')
                            ->label(__('filament.category_slug'))
                            ->required(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label(__('filament.category_name')),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->striped();
    }

    public static function getRelations(): array
    {
        return [
            PostsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCategories::route('/'),
            'create' => CreateCategory::route('/create'),
            'edit' => EditCategory::route('/{record}/edit'),
        ];
    }
}
