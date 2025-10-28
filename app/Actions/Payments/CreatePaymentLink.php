<?php

namespace App\Actions\Payments;

use Basement\AbacatePay\AbacatePayClient;
use Basement\AbacatePay\Billing\Http\Request\CreateBillingRequest;
use Basement\AbacatePay\Billing\Http\Request\ProductRequest;
use Basement\AbacatePay\Customer\Http\Request\CustomerRequest;
use Ramsey\Uuid\Uuid;

class CreatePaymentLink
{
    public function handle(CreatePaymentLinkDTO $dto)
    {
        $client = new AbacatePayClient(config('services.abacatepay.api_key'));

        $externalId = Uuid::uuid4()->toString();

        $product = new ProductRequest(
            $dto->productId,
            $dto->productName,
            $dto->productDescription,
            1,
            $dto->productPrice,
        );

        $customerId = Uuid::uuid4()->toString();

        $customer = new CustomerRequest(
            $customerId,
            $dto->customerName,
            $dto->customerCellphone,
            $dto->customerEmail,
            $dto->customerTaxId,
        );

        $request = CreateBillingRequest::oneTime()
            ->pix()
            ->completionUrl('https://firece.com.br')
            ->returnUrl('https://firece.com.br')
            ->externalId($externalId)
            ->products($product)
            ->forCustomer($customer)
            ->build();

        $response = $client->billing()->create($request);

        return CreatePaymentLinkResponse::make($externalId, $response);
    }
}
