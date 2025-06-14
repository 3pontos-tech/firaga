<?php

namespace Database\Factories\CMS;

use Illuminate\Database\Eloquent\Factories\Factory;
use Webid\Druid\Models\ReusableComponent;

class ReusableComponentFactory extends Factory
{
    protected $model = ReusableComponent::class;

    public function definition(): array
    {
        return [
            'title' => 'Reusable component ' . $this->faker->word,
            'content' => $this->fakeContent(),
            'lang' => 'en',
        ];
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function fakeContent(): array
    {
        return [
            [
                'type' => 'text',
                'data' => [
                    'content' => '<p>' . $this->faker->text(300) . '</p>',
                ],
            ],
            [
                'type' => 'text',
                'data' => [
                    'content' => '<h2>' . $this->faker->text(30) . '</h2><p>' . $this->faker->text(900) . '</p>',
                ],
            ],
        ];
    }
}
