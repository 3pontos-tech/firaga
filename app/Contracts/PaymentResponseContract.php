<?php

namespace App\Contracts;

interface PaymentResponseContract
{
    public function externalId(): string|int ;
    public function paymentUrl(): string|int;
}
