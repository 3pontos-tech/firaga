<?php

namespace App\Console\Commands;

use App\Actions\Payments\CreatePaymentLink;
use App\Actions\Payments\CreatePaymentLinkDTO;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(CreatePaymentLink $createPaymentLink)
    {

        $paymentData = [
            'externalId' => 'EXT-' . uniqid(),
            'productId' => 'PROD-001',
            'productName' => 'Product Name',
            'productDescription' => 'Product description here',
            'productQuantity' => 1,
            'productPrice' => 10000,
            'customerId' => 'CUST-' . uniqid(),
            'customerName' => 'John Doe',
            'customerCellphone' => '+5511999999999',
            'customerEmail' => 'john.doe@example.com',
            'tax_id' => '35061134885', // CPF or CNPJ
        ];

        $payment = CreatePaymentLinkDTO::fromArray($paymentData);

        $createPaymentLink->handle($payment);
    }
}
