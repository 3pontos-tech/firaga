<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Testimonial>
 */
class TestimonialFactory extends Factory
{
    protected $model = Testimonial::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'role' => fake()->word(),
            'rating' => fake()->numberBetween(1, 5),
            'comment' => fake()->paragraph(),
            'posted_at' => fake()->dateTime(),
        ];
    }
}
