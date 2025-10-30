<?php

namespace App\Filament\Consultant\Resources\Payments;

use App\Filament\Consultant\Resources\Payments\Pages\CreatePayment;
use App\Filament\Consultant\Resources\Payments\Pages\ListPayments;
use App\Filament\Consultant\Resources\Payments\Schemas\PaymentForm;
use App\Filament\Consultant\Resources\Payments\Schemas\PaymentInfolist;
use App\Filament\Consultant\Resources\Payments\Tables\PaymentsTable;
use App\Models\Consultants\Payment;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PaymentResource extends Resource
{
    protected static ?string $model = Payment::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PaymentForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PaymentInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PaymentsTable::configure($table);
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
            'index' => ListPayments::route('/'),
            'create' => CreatePayment::route('/create'),
        ];
    }
}
