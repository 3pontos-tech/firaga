<?php

namespace App\Filament\Consultant\Resources\Payments\Schemas;

use App\Enums\Payments\PaymentProviderEnum;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;

class PaymentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('provider')
                    ->enum(PaymentProviderEnum::class)
                    ->options(PaymentProviderEnum::class)
                    ->required(),

                Select::make('plan')
                    ->label('Plano')
                    ->reactive()
                    ->options([
                        'gold' => 'Plano Gold',
                        'platinum' => 'Plano Platinum',
                        'black' => 'Plano Black',
                    ])
                    ->required(),

                TextInput::make('customer_name')
                    ->label('Customer Name')
                    ->reactive()
                    ->required(),

                TextInput::make('customer_email')
                    ->label('Customer Email')
                    ->reactive()
                    ->required(),

                TextInput::make('customer_phone_number')
                    ->label('Customer Phone Number')
                    ->mask('(99) 99999-9999')
                    ->reactive()
                    ->required(),

                TextInput::make('customer_tax_id')
                    ->label('Customer CPF')
                    ->mask('999.999.999-99')
                    ->required(),

                TextInput::make('amount')
                    ->label('Amount')
                    ->numeric()
                    ->required(),
            ]);
    }
}
