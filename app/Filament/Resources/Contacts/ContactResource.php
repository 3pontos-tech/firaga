<?php

namespace App\Filament\Resources\Contacts;

use App\Enums\MessageIntent;
use App\Filament\Resources\Contacts\Pages\CreateContact;
use App\Filament\Resources\Contacts\Pages\EditContact;
use App\Filament\Resources\Contacts\Pages\ListContacts;
use App\Models\Contact;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $slug = 'contacts';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-folder-open';

    protected static ?string $label = null;

    public static function getLabel(): ?string
    {
        return __('filament.contact');
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label(__('filament.name'))
                    ->required(),

                TextInput::make('email')
                    ->label(__('filament.email'))
                    ->required(),

                TextInput::make('phone_number')
                    ->label(__('filament.phone_number'))
                    ->required(),

                TextInput::make('ip_address')
                    ->label(__('filament.ip_address'))
                    ->required(),

                TextInput::make('message')
                    ->label(__('filament.message'))
                    ->required(),

                Select::make('message_intent')
                    ->label(__('filament.message_intent'))
                    ->options(MessageIntent::class)
                    ->required(),

                TextInput::make('contact_preference')
                    ->label(__('filament.contact_preference'))
                    ->required(),

                Placeholder::make('created_at')
                    ->label(__('filament.created_date'))
                    ->content(fn (?Contact $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                Placeholder::make('updated_at')
                    ->label(__('filament.last_modified'))
                    ->content(fn (?Contact $record): string => $record?->updated_at?->diffForHumans() ?? '-'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('message_intent')
                    ->badge(),
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('email')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('phone_number'),

                TextColumn::make('ip_address'),

                TextColumn::make('message'),

                TextColumn::make('contact_preference'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListContacts::route('/'),
            'create' => CreateContact::route('/create'),
            'edit' => EditContact::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'email'];
    }
}
