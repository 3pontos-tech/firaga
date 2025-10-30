<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use TresPontosTech\Consultant\Core\Models\Consultant;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('consultant_payments', function (Blueprint $table): void {
            $table->id();
            $table->foreignIdFor(Consultant::class);
            $table->string('provider');
            $table->string('provider_id');
            $table->string('payment_url');
            $table->string('payment_method');
            $table->decimal('amount');
            $table->string('status');
            $table->string('plan');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_tax_id');
            $table->string('customer_phone_number');
            $table->string('crm_opportunity_id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('consultant_payments');
    }
};
