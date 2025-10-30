<?php

namespace App\Filament\Consultant\Resources\Payments\Tables;

use App\Models\Consultants\Payment;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Support\Colors\Color;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PaymentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn ($query) => $query->where('consultant_id', auth()->user()->consultants()->first()->getKey()))
            ->columns([
                TextColumn::make('provider')
                    ->label('Provider')
                    ->searchable()
                    ->badge(),
                TextColumn::make('payment_method')
                    ->label('Provider')
                    ->searchable()
                    ->badge(),
                TextColumn::make('amount')
                    ->label('Amount')
                    ->money('BRL')
                    ->sortable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->searchable()
                    ->sortable(),

                TextColumn::make('customer_email')
                    ->label('Customer Mail')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                Action::make('link')
                    ->url(fn (Payment $record) => $record->payment_url)
                    ->openUrlInNewTab()
                    ->color(Color::Fuchsia)
                    ->icon(Heroicon::PaperClip),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
