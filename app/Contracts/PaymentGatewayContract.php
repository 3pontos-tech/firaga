<?php

namespace App\Contracts;

interface PaymentGatewayContract
{
    public function billing(PaymentDtoContract $dto): PaymentResponseContract;
}
