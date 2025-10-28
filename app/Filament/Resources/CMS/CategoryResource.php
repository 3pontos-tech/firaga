<?php

namespace App\Filament\Resources\CMS;

use App\Filament\Resources\CMS\CategoryResource\Pages\CreateCategory;
use App\Filament\Resources\CMS\CategoryResource\Pages\EditCategory;
use App\Filament\Resources\CMS\CategoryResource\Pages\ListCategories;
use App\Filament\Resources\CMS\CategoryResource\RelationManagers\PostsRelationManager;
use App\Models\CMS\Category;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationGroup = 'Blog';

    protected static ?int $navigationSort = 1;

    protected static ?string $label = null;

    public static function getLabel(): ?string
    {
        return __('filament.category');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
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
