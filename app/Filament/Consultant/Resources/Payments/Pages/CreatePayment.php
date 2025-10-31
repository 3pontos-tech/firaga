<?php

namespace App\Filament\Consultant\Resources\Payments\Pages;

use App\Actions\Payments\CreatePaymentLink;
use App\Actions\Payments\CreatePaymentLinkDTO;
use App\Contracts\PaymentGatewayContract;
use App\Contracts\PaymentResponseContract;
use App\Enums\Payments\PaymentProviderEnum;
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
            'externalId' => sprintf('firaga-%s-%s', $data['plan']->value, Uuid::uuid4()->toString()),
            'productId' => sprintf('%s-%s', $data['plan']->value, time()),
            'productName' => $data['plan']->value,
            'productDescription' => $data['plan']->value,
            'productPrice' => (int)$data['amount'] * 100,
            'customerId' => Uuid::uuid4()->toString(),
            'customerName' => $data['customer_name'],
            'customerCellphone' => $data['customer_phone_number'],
            'customerEmail' => $data['customer_email'],
            'customerTaxId' => $data['customer_tax_id'],
        ];

        $provider = PaymentProviderEnum::from($data['provider']->value);
        $dto = $provider->getDto($externalData);
        $driver = $provider->getDriver();

        /* @var PaymentResponseContract $response */

        $response = app(CreatePaymentLink::class)->handle($dto, $driver);

        $data['consultant_id'] = auth()->id();
        $data['status'] = PaymentStatusEnum::PENDING;

        $data['crm_opportunity_id'] = 1;
        $data['payment_url'] = $response->paymentUrl();
        $data['provider_id'] = $response->externalId();

        return $data;
    }
}
