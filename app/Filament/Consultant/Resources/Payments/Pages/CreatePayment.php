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

class CreatePayment extends CreateRecord
{
    protected static string $resource = PaymentResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $provider = PaymentProviderEnum::from($data['provider']->value);
        $dto = $provider->getDto($data);
        $driver = $provider->getDriver();

        /* @var PaymentResponseContract $response */

        $response = app(CreatePaymentLink::class)->handle($dto, $driver);

        $data['consultant_id'] = auth()->user()->consultants()->first()->getKey();
        $data['status'] = PaymentStatusEnum::PENDING;

        $data['crm_opportunity_id'] = 1;
        $data['payment_url'] = $response->paymentUrl();
        $data['provider_id'] = $response->externalId();

        return $data;
    }
}
