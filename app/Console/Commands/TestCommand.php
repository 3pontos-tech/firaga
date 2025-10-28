<?php

namespace App\Console\Commands;

use App\Actions\Payments\CreatePaymentLink;
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
        $createPaymentLink->handle();
    }
}
