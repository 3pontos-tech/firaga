<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Date;
use App\Models\Consultants\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;
use TresPontosTech\Consultant\Core\Models\Consultant;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition(): array
    {
        return [
            'provider' => $this->faker->word(),
            'provider_id' => $this->faker->word(),
            'payment_url' => $this->faker->url(),
            'amount' => $this->faker->randomFloat(),
            'status' => $this->faker->word(),
            'customer_name' => $this->faker->name(),
            'customer_email' => $this->faker->unique()->safeEmail(),
            'customer_cpf' => $this->faker->word(),
            'customer_phone_number' => $this->faker->phoneNumber(),
            'crm_opportunity_id' => $this->faker->word(),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),

            'consultant_id' => Consultant::factory(),
        ];
    }
}
