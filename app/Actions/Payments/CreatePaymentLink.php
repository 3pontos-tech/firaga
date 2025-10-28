<?php

namespace App\Actions\Payments;

use Basement\AbacatePay\AbacatePayClient;
use Basement\AbacatePay\Billing\Http\Request\CreateBillingRequest;
use Basement\AbacatePay\Billing\Http\Request\ProductRequest;
use Basement\AbacatePay\Customer\Http\Request\CustomerRequest;
use Ramsey\Uuid\Uuid;

class CreatePaymentLink
{
    public function handle()
    {
        $client = new AbacatePayClient('socorro');

        $externalId = Uuid::uuid4()->toString();

        $productId = 'gold_123';

        $productName = 'Consultoria Gold';

        $productDescription = 'Consultoria Gold mto foda';

        $productPrice = 1000;

        $product = new ProductRequest($productId, $productName, $productDescription, 1, $productPrice);

        $customerId = Uuid::uuid4()->toString();

        $customerName = 'Fulaninho';

        $customerCellphone = '11999999999';

        $customerEmail = 'aaaa@aaaa.com';

        $customerTaxId = '99999999999';

        $customer = new CustomerRequest($customerId, $customerName, $customerCellphone, $customerEmail, $customerTaxId);

        $request = CreateBillingRequest::oneTime()
            ->pix()
            ->completionUrl('https://firece.com.br')
            ->returnUrl('https://firece.com.br')
            ->externalId($externalId)
            ->products($product)
            ->forCustomer($customer)
            ->build()
            ->toArray();
        dd($request);

        $client->billing()->create($request);
    }
}
