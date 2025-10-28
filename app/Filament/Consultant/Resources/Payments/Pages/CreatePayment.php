<?php

namespace App\Filament\Consultant\Resources\Payments\Pages;

use App\Enums\Payments\PaymentStatusEnum;
use App\Filament\Consultant\Resources\Payments\PaymentResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePayment extends CreateRecord
{
    protected static string $resource = PaymentResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['consultant_id'] = auth()->id();
        $data['status'] = PaymentStatusEnum::PENDING;
        $data['amount'] = $data['amount']; //because abacate uses cents
        $data['crm_opportunity_id'] = 1;
        $data['payment_url'] = 'www.google.com'; //url that will be returned by abacate
        $data['provider_id'] = 1;
        return $data;
    }
}
