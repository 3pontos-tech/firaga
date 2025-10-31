<?php

namespace Tests\Fixtures;

use App\Contracts\PaymentResponseContract;

class FakeGatewayResponse implements PaymentResponseContract
{
    public function __construct(
        public string $paymentUrl,
        public string $externalId
    )
    {
    }

    public static function make(array $data): self
    {
        return new self(
            paymentUrl: $data['paymentUrl'],
            externalId: $data['externalId']
        );
    }

    public function externalId(): string|int
    {
        return $this->externalId;
    }

    public function paymentUrl(): string|int
    {
        return $this->paymentUrl;
    }
}
