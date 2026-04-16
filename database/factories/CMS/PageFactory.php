<?php

declare(strict_types=1);

namespace Database\Factories\CMS;

use App\Enums\PageStatus;
use App\Enums\PageTheme;
use App\Models\CMS\Page;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends Factory<Page>
 */
class PageFactory extends Factory
{
    protected $model = Page::class;

    public function definition(): array
    {
        return [
            'title' => fake()->name,
            'slug' => fake()->slug,
            'is_landing' => false,
            'status' => PageStatus::PUBLISHED->value,
            'published_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'disable_indexation' => false,
            'lang' => 'pt_BR',
            'theme' => PageTheme::Default,
            'meta_title' => fake()->text(30),
            'meta_description' => fake()->text(50),
            'meta_keywords' => fake()->word.','.fake()->word,
            'opengraph_title' => fake()->text(30),
            'opengraph_description' => fake()->text(30),
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (Model $page): void {
            /** @var Page $page */
            if ($page->translation_origin_model_id) {
                return;
            }

            $page->update(['translation_origin_model_id' => $page->getKey()]);
        });
    }

    public function draft(): static
    {
        return $this->state(fn (): array => [
            'status' => PageStatus::DRAFT->value,
        ]);
    }

    public function asATranslationFrom(Page $page, string $lang): static
    {
        return $this->state(fn (array $attributes): array => [
            'lang' => $lang,
            'translation_origin_model_id' => $page->getKey(),
        ]);
    }
}
