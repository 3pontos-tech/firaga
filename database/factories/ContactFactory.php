<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Date;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone_number' => $this->faker->phone_number(),
            'ip_address' => $this->faker->ipv4(),
            'message' => $this->faker->word(),
            'message_intent' => $this->faker->word(),
            'contact_preference' => $this->faker->word(),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ];
    }
}
