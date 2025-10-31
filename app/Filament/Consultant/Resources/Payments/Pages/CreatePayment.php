<?php

namespace App\Filament\Consultant\Resources\Payments\Pages;

use App\Actions\Payments\CreatePaymentLink;
use App\Actions\Payments\CreatePaymentLinkDTO;
use App\Enums\Payments\PaymentStatusEnum;
use App\Filament\Consultant\Resources\Payments\PaymentResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePayment extends CreateRecord
{
    protected static string $resource = PaymentResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {

        $dto = CreatePaymentLinkDTO::fromArray($data);

        /* @var CreatePaymentLinkResponse $response */
        $response = app(CreatePaymentLink::class)->handle($dto);

        $data['consultant_id'] = auth()->user()->consultants()->first()->getKey();
        $data['status'] = PaymentStatusEnum::PENDING;

        $data['crm_opportunity_id'] = 1;
        $data['payment_url'] = $response->data->data->url;
        $data['provider_id'] = $response->externalId;

        return $data;
    }
}
