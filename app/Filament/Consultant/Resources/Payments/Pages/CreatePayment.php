<?php

namespace App\Filament\Consultant\Resources\Payments\Pages;

use App\Filament\Consultant\Resources\Payments\PaymentResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePayment extends CreateRecord
{
    protected static string $resource = PaymentResource::class;
}
