<?php

namespace App\Actions\Payments;

class CreatePaymentLinkDTO
{
    public function __construct(
        public string $externalId,
        public string $productId,
        public string $productName,
        public string $productDescription,
        public int $productQuantity,
        public int $productPrice,
        public string $customerId,
        public string $customerName,
        public string $customerCellphone,
        public string $customerEmail,
        public string $tax_id,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            externalId: $data['externalId'],
            productId: $data['productId'],
            productName: $data['productName'],
            productDescription: $data['productDescription'],
            productQuantity: $data['productQuantity'],
            productPrice: $data['productPrice'],
            customerId: $data['customerId'],
            customerName: $data['customerName'],
            customerCellphone: $data['customerCellphone'],
            customerEmail: $data['customerEmail'],
            tax_id: $data['tax_id'],
        );
    }
}
