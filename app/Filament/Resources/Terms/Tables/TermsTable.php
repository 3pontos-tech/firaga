<?php

declare(strict_types=1);

namespace App\Filament\Resources\Terms\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TermsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Título')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('slug')
                    ->label('Slug')
                    ->copyable(),
                TextColumn::make('description')
                    ->label('Descrição')
                    ->limit(50)
                    ->toggleable(),
                IconColumn::make('is_active')
                    ->label('Ativo')
                    ->boolean()
                    ->sortable(),
                TextColumn::make('sections_count')
                    ->label('Seções')
                    ->state(fn ($record): int => is_array($record->content) ? count($record->content) : 0)
                    ->badge(),
                TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Atualizado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
}
