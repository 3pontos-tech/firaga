<?php

namespace App\Filament\Consultant\Resources\Payments\Pages;

use App\Actions\Payments\CreatePaymentLink;
use App\Actions\Payments\CreatePaymentLinkDTO;
use App\Actions\Payments\CreatePaymentLinkResponse;
use App\Enums\Payments\PaymentStatusEnum;
use App\Filament\Consultant\Resources\Payments\PaymentResource;
use Filament\Resources\Pages\CreateRecord;
use Ramsey\Uuid\Uuid;

class CreatePayment extends CreateRecord
{
    protected static string $resource = PaymentResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $externalData = [
            'externalId' => 'EXT-' . uniqid(),
            'productId' => uniqid(),
            'productName' => $data['plan']->value,
            'productDescription' => $data['plan']->value,
            'productPrice' => (int) $data['amount'] * 100,
            'customerId' => Uuid::uuid4()->toString(),
            'customerName' => $data['customer_name'],
            'customerCellphone' => $data['customer_phone_number'],
            'customerEmail' => $data['customer_email'],
            'customerTaxId' => $data['customer_tax_id'],
        ];

        $dto = CreatePaymentLinkDTO::fromArray($externalData);

        /* @var CreatePaymentLinkResponse $response */

        $response = app(CreatePaymentLink::class)->handle($dto);


        $data['consultant_id'] = auth()->id();
        $data['status'] = PaymentStatusEnum::PENDING;


        $data['crm_opportunity_id'] = 1;
        $data['payment_url'] = $response->data->data->url;
        $data['provider_id'] = $response->externalId;

        return $data;
    }
}
