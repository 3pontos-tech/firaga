<?php

namespace Database\Factories\CMS;

use App\Models\CMS\Page;
use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Webid\Druid\Enums\PageStatus;

class PageFactory extends Factory
{
    protected $model = Page::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->name,
            'slug' => $this->faker->slug,
            'is_landing' => false,
            'status' => PageStatus::PUBLISHED->value,
            'content' => $this->fakeContent(),
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'disable_indexation' => false,
            'lang' => 'en',
            'meta_title' => $this->faker->text(30),
            'meta_description' => $this->faker->text(50),
            'meta_keywords' => $this->faker->word . ',' . $this->faker->word,
            'opengraph_title' => $this->faker->text(30),
            'opengraph_description' => $this->faker->text(30),
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
        return $this->state(function (): array {
            return [
                'status' => PageStatus::DRAFT->value,
            ];
        });
    }

    public function asATranslationFrom(Page $page, string $lang): static
    {
        return $this->state(function (array $attributes) use ($lang, $page): array {
            return [
                'lang' => $lang,
                'translation_origin_model_id' => $page->getKey(),
            ];
        });
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
                'type' => 'textImage',
                'data' => [
                    'content' => '<p>' . $this->faker->text(900) . '</p>',
                    'image' => Media::factory()->create()->getKey(),
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
