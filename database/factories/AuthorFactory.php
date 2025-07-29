<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class AuthorFactory extends Factory
{
    protected $model = Author::class;

    public function definition(): array
    {
        return [
            'slug' => Str::slug(fake()->name()),
            'user_id' => User::factory(),
            'name' => fake()->name(),
            'role' => fake()->randomElement(['Financial Consultant', 'Developer']),
            'description' => fake()->paragraph(),
            'linkedin_url' => fake()->url(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes): array => [
            'email_verified_at' => null,
        ]);
    }
}
