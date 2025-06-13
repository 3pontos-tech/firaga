<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Awcodes\Curator\Models\Media;
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
            'name' => $this->faker->name(),
            'role' => $this->faker->word(),
            'rating' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->paragraph(),
            'posted_at' => $this->faker->dateTime(),
            'thumbnail_id' => Media::factory()->create(),
        ];
    }
}
