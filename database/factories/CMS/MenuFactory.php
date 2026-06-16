<?php

declare(strict_types=1);

namespace Database\Factories\CMS;

use App\Models\CMS\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends Factory<Menu>
 */
class MenuFactory extends Factory
{
    protected $model = Menu::class;

    public function definition(): array
    {
        return [
            'title' => fake()->name,
            'slug' => fake()->slug,
            'lang' => 'en',
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (Model $menu): void {
            /** @var Menu $menu */
            if ($menu->translation_origin_model_id) {
                return;
            }

            $menu->update(['translation_origin_model_id' => $menu->getKey()]);
        });
    }

    public function asATranslationFrom(Menu $menu, string $lang): static
    {
        return $this->state(fn (array $attributes): array => [
            'lang' => $lang,
            'translation_origin_model_id' => $menu->getKey(),
        ]);
    }
}
