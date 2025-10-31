<?php

namespace App\Actions\Payments;

use App\Contracts\PaymentDtoContract;
use App\Contracts\PaymentGatewayContract;
use App\Contracts\PaymentResponseContract;

final class CreatePaymentLink
{
    public function handle(PaymentDtoContract $dto, PaymentGatewayContract $gateway): PaymentResponseContract
    {
        return $gateway->billing($dto);
    }
}
