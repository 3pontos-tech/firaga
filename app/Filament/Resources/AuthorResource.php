<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AuthorResource\Pages\CreateAuthor;
use App\Filament\Resources\AuthorResource\Pages\EditAuthor;
use App\Filament\Resources\AuthorResource\Pages\ListAuthors;
use App\Models\Author;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class AuthorResource extends Resource
{
    protected static ?string $label = null;

    protected static ?string $model = Author::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Blog';

    public static function getLabel(): ?string
    {
        return __('filament.authors');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
                CuratorPicker::make('thumbnail_id')
                    ->columnSpanFull()
                    ->label(__('filament.avatar'))
                    ->preserveFilenames(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail.url')
                    ->label(__('filament.avatar'))
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
