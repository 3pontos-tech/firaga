<?php

namespace App\Actions\Payments;

use Basement\AbacatePay\Billing\Http\Response\CreateBillingResponse;

class CreatePaymentLinkResponse
{
    public function __construct(
        public string $externalId,
        public CreateBillingResponse $data,
    ) {}

    public static function make(string $externalId, CreateBillingResponse $data): self
    {
        return new self(
            externalId: $externalId,
            data: $data,
        );
    }
}
