<?php

namespace App\Filament\Resources;

use App\Enums\MessageIntent;
use App\Filament\Resources\ContactResource\Pages\CreateContact;
use App\Filament\Resources\ContactResource\Pages\EditContact;
use App\Filament\Resources\ContactResource\Pages\ListContacts;
use App\Models\Contact;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $slug = 'contacts';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = null;

    public static function getLabel(): ?string
    {
        return __('filament.contact');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label(__('filament.name'))
                    ->required(),

                TextInput::make('email')
                    ->label(__('filament.email'))
                    ->required(),

                TextInput::make('phone_number')
                    ->label(__('filament.phoneNumber'))
                    ->required(),

                TextInput::make('ip_address')
                    ->label(__('filament.ipAddress'))
                    ->required(),

                TextInput::make('message')
                    ->label(__('filament.message'))
                    ->required(),

                Select::make('message_intent')
                    ->label(__('filament.messageIntent'))
                    ->options(MessageIntent::class)
                    ->required(),

                TextInput::make('contact_prereference')
                    ->label(__('filament.contactPreference'))
                    ->required(),

                Placeholder::make('created_at')
                    ->label(__('filament.createdDate'))
                    ->content(fn (?Contact $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                Placeholder::make('updated_at')
                    ->label(__('filament.lastModified'))
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

                TextColumn::make('contact_prereference'),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
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
