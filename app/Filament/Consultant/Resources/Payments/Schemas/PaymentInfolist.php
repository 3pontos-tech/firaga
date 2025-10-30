<?php

namespace App\Filament\Consultant\Resources\Payments\Schemas;

use App\Models\Consultants\Payment;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class PaymentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Payment')
                    ->columns(3)
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('provider')
                            ->label('Provider')
                            ->badge(),

                        TextEntry::make('status')
                            ->label('Status')
                            ->badge(),

                        TextEntry::make('amount')
                            ->label('Amount')
                            ->money('BRL'),

                        TextEntry::make('plan')
                            ->label('Plan')
                            ->badge(),

                        TextEntry::make('payment_url')
                            ->label('Payment Link')
                            ->url(fn (Payment $record): ?string => $record->payment_url)
                            ->color('primary')
                            ->state(fn () => 'Checkout')
                            ->openUrlInNewTab()
                            ->icon(Heroicon::PaperClip),
                    ]),

                Section::make('Customer')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('customer_name')
                            ->label('Name'),

                        TextEntry::make('customer_email')
                            ->label('Email')
                            ->copyable(),

                        TextEntry::make('customer_tax_id')
                            ->label('CPF')
                            ->copyable(),

                        TextEntry::make('customer_phone_number')
                            ->label('Phone'),

                        TextEntry::make('crm_opportunity_id')
                            ->label('Opportunity ID')
                            ->state(fn () => 'Não integrado')
                            ->placeholder('-')
                            ->copyable(),
                    ]),

                Section::make('Timestamps')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('created_at')
                            ->label('Created At')
                            ->dateTime(),
                        TextEntry::make('updated_at')
                            ->label('Updated At')
                            ->dateTime(),
                    ]),
            ]);
    }
}
