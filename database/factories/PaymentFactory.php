<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Consultants\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Date;
use TresPontosTech\Consultant\Core\Models\Consultant;

/**
 * @extends Factory<\App\Models\Consultants\Payment>
 */
class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition(): array
    {
        return [
            'provider' => fake()->word(),
            'provider_id' => fake()->word(),
            'payment_url' => fake()->url(),
            'amount' => fake()->randomFloat(),
            'status' => fake()->word(),
            'customer_name' => fake()->name(),
            'customer_email' => fake()->unique()->safeEmail(),
            'customer_tax_id' => fake()->word(),
            'customer_phone_number' => fake()->phoneNumber(),
            'crm_opportunity_id' => fake()->word(),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),

            'consultant_id' => Consultant::factory(),
        ];
    }
}
