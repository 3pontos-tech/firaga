<?php

namespace App\Actions\Payments;

use App\Contracts\PaymentDtoContract;
use Ramsey\Uuid\Uuid;

class CreatePaymentLinkDTO implements PaymentDtoContract
{
    public function __construct(
        public string $externalId,
        public string $paymentMethod,
        public string $productId,
        public string $productName,
        public string $productDescription,
        public int $productQuantity,
        public int $productPrice,
        public string $customerId,
        public string $customerName,
        public string $customerCellphone,
        public string $customerEmail,
        public string $customerTaxId,
    ) {}

    public static function fromArray(array $data): self
    {
        $data = [
            'externalId' => sprintf('firaga-%s-%s', $data['plan']->value, Uuid::uuid4()->toString()),
            'productId' => sprintf('%s-%s', $data['plan']->value, time()),
            'paymentMethod' => $data['payment_method']->value,
            'productName' => $data['plan']->value,
            'productDescription' => $data['plan']->value,
            'productPrice' => str(($data['amount'] * 100))->remove(['.', ','])->toInteger(),
            'customerId' => Uuid::uuid4()->toString(),
            'customerName' => $data['customer_name'],
            'customerCellphone' => $data['customer_phone_number'],
            'customerEmail' => $data['customer_email'],
            'customerTaxId' => $data['customer_tax_id'],
        ];

        return new self(
            externalId: $data['externalId'],
            paymentMethod: $data['paymentMethod'],
            productId: $data['productId'],
            productName: $data['productName'],
            productDescription: $data['productDescription'],
            productQuantity: $data['productQuantity'] ?? 1,
            productPrice: $data['productPrice'],
            customerId: $data['customerId'],
            customerName: $data['customerName'],
            customerCellphone: $data['customerCellphone'],
            customerEmail: $data['customerEmail'],
            customerTaxId: $data['customerTaxId'],
        );
    }
}
