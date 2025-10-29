<?php

namespace App\Filament\Consultant\Resources\Payments\Tables;

use _PHPStan_f9a2208af\Symfony\Component\Console\Color;
use App\Models\Consultants\Payment;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PaymentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('provider')
                    ->label('Provider')
                    ->searchable()
                    ->badge(),
                TextColumn::make('amount')
                    ->label('Amount')
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
                EditAction::make(),
                Action::make('link')
                    ->url(fn(Payment $record) => $record->payment_url)
                    ->openUrlInNewTab()
                    ->color(\Filament\Support\Colors\Color::Fuchsia)
                    ->icon(Heroicon::PaperClip),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
