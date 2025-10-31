<?php

namespace App\Filament\Resources\Authors;

use App\Filament\Resources\Authors\Pages\CreateAuthor;
use App\Filament\Resources\Authors\Pages\EditAuthor;
use App\Filament\Resources\Authors\Pages\ListAuthors;
use App\Models\Author;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class AuthorResource extends Resource
{
    protected static ?string $label = null;

    protected static ?string $model = Author::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-book-open';

    protected static string|\UnitEnum|null $navigationGroup = 'Blog';

    public static function getLabel(): ?string
    {
        return __('filament.authors');
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('slug')
                    ->label(__('filament.slug_author'))
                    ->required()
                    ->columnSpan(2)
                    ->hint('*Deve conter apenas nome e sobrenome. Ex: maria-silva-lima -> maria-silva')
                    ->hintColor('info')
                    ->maxLength(255)
                    ->unique(Author::class, 'slug', ignoreRecord: true)
                    ->disabledOn('edit'),
                Select::make('user_id')
                    ->label(__('filament.user'))
                    ->relationship('user', 'name')
                    ->required(),
                TextInput::make('name')
                    ->label(__('filament.name'))
                    ->required()
                    ->maxLength(255)
                    ->live(debounce: 500)
                    ->afterStateUpdated(fn (string $operation, $state, Set $set): mixed => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                Textarea::make('description')
                    ->columnSpan(2)
                    ->label(__('filament.biography'))
                    ->required(),
                TextInput::make('linkedin_url')
                    ->label(__('filament.linkedin_url'))
                    ->required()
                    ->url(),
                SpatieMediaLibraryFileUpload::make('avatar')
                    ->label(__('filament.avatar'))
                    ->collection('avatar'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('avatar')
                    ->label(__('filament.avatar'))
                    ->collection('avatar')
                    ->circular()
                    ->columnSpanFull(),
                TextColumn::make('name')
                    ->label(__('filament.name'))
                    ->searchable(),
                TextColumn::make('posts_count')
                    ->badge()
                    ->counts('posts')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAuthors::route('/'),
            'create' => CreateAuthor::route('/create'),
            'edit' => EditAuthor::route('/{record}/edit'),
        ];
    }
}
