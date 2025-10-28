<?php

namespace App\Filament\Consultant\Resources\Payments\Schemas;

use App\Enums\Payments\PaymentProviderEnum;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Livewire\Component;

class PaymentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('customer_name')
                    ->label('Customer Name')
                    ->reactive()
                    ->options([
                        'johnDoe' => 'John Doe',
                        'janeDoe' => 'Jane Doe',
                        'joaozinhoJhow' => 'Joaozinho jhow',
                    ])
                    ->afterStateUpdated(function ($state, Set $set) {
                        $set('customer_email', "$state@email.com");
                        $set('customer_phone_number', "(11) 90280018");
                        $set('customer_cpf', "999.999.999-99");

                        if (is_null($state)) {
                            $set('customer_email', "");
                            $set('customer_phone_number', "");
                            $set('customer_cpf', "");
                        }
                    })
                    ->required(),

                TextInput::make('customer_email')
                    ->label('Customer Email')
                    ->reactive()
                    ->readonly()
                    ->required(),

                TextInput::make('customer_phone_number')
                    ->label('Customer Phone Number')
                    ->readonly()
                    ->mask('(99) 99999-9999')
                    ->reactive()
                    ->required(),

                TextInput::make('customer_cpf')
                    ->label('Customer CPF')
                    ->readonly()
                    ->mask('999.999.999-99')
                    ->reactive()
                    ->required(),

                TextInput::make('amount')
                    ->label('Amount')
                    ->numeric()
                    ->required(),

                TextInput::make('payment_url')
                    ->label('Url')
                    ->hiddenOn('create')
                    ->required(),

                Select::make('provider')
                    ->enum(PaymentProviderEnum::class)
                    ->options(PaymentProviderEnum::class)
                    ->required(),
            ]);
    }
}
