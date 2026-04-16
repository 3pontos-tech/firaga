<?php

declare(strict_types=1);

namespace He4rt\Admin\Filament\Resources\Teams\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use He4rt\Identity\Teams\Team;
use He4rt\Identity\Teams\TeamStatus;

class TeamForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('owner_id')
                    ->label(__('teams::filament.fields.owner'))
                    ->relationship('owner', 'name')
                    ->required(),
                TextInput::make('name')
                    ->label(__('teams::filament.fields.name'))
                    ->lazy()
                    ->required()
                    ->afterStateUpdated(function (?Team $record, Set $set, ?string $state): void {
                        if (blank($state) || !is_null($record)) {
                            return;
                        }

                        $set('slug', sprintf('%s-%s', str($state)->slug()->toString(), mb_strtolower(str()->random(5))));
                    }),
                TextInput::make('description')
                    ->label(__('teams::filament.fields.description'))
                    ->required(),
                TextInput::make('slug')
                    ->label(__('teams::filament.fields.slug'))
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->regex('/^[a-z0-9]+(?:-[a-z0-9]+)*$/')
                    ->disabled(fn (?Team $record): bool => !is_null($record)),
                Select::make('status')
                    ->label(__('teams::filament.fields.status'))
                    ->options(TeamStatus::class)
                    ->required(),
                TextInput::make('contact_email')
                    ->label(__('teams::filament.fields.contact_email'))
                    ->email()
                    ->required(),
            ]);
    }
}
