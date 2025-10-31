<?php

namespace App\Actions\Payments;

use App\Contracts\PaymentResponseContract;
use Basement\AbacatePay\Billing\Http\Response\CreateBillingResponse;

class CreatePaymentLinkResponse implements PaymentResponseContract
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

    public function externalId(): string|int
    {
        return $this->externalId;
    }

    public function paymentUrl(): string|int
    {
        return $this->data->data->url;
    }
}
