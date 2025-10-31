<?php

namespace App\Adapter;

use App\Actions\Payments\CreatePaymentLinkDTO;
use App\Actions\Payments\CreatePaymentLinkResponse;
use App\Contracts\PaymentDtoContract;
use App\Contracts\PaymentGatewayContract;
use Basement\AbacatePay\AbacatePayClient;
use Basement\AbacatePay\Billing\Http\Request\CreateBillingRequest;
use Basement\AbacatePay\Billing\Http\Request\ProductRequest;
use Basement\AbacatePay\Customer\Http\Request\CustomerRequest;
use Basement\AbacatePay\Exception\AbacatePayException;
use Ramsey\Uuid\Uuid;

final class AbacatePayAdapter implements PaymentGatewayContract
{
    public readonly AbacatePayClient $client;
    public function __construct()
    {
        $this->client = new AbacatePayClient(config('services.abacatepay.api_key'));
    }

    /**
     * @throws AbacatePayException
     * @throws \JsonException
     */
    public function billing(PaymentDtoContract $dto): CreatePaymentLinkResponse
    {
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

        $response = $this->client->billing()->create($request);

        return CreatePaymentLinkResponse::make($externalId, $response);
    }
}
