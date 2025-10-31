<?php

namespace Tests\Fixtures;

use App\Actions\Payments\CreatePaymentLinkResponse;
use App\Contracts\PaymentDtoContract;
use App\Contracts\PaymentGatewayContract;
use App\Contracts\PaymentResponseContract;

class FakeGatewayClass implements PaymentGatewayContract
{

    public function billing(PaymentDtoContract $dto): PaymentResponseContract
    {
        return FakeGatewayResponse::make([
            'paymentUrl' => 'fake-payment-url',
            'externalId' => 'fake-external-id',
        ]);
    }
}
