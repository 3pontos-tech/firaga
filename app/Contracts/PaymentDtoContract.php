<?php

namespace App\Contracts;

interface PaymentDtoContract
{
    public static function fromArray(array $data): self;
}
