<?php

namespace Database\Factories\CMS;

use App\Enums\CustomComponent;
use App\Models\Author;
use App\Models\CMS\Category;
use App\Models\CMS\Post;
use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Webid\Druid\Enums\PostStatus;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => fake()->words(3, true),
            'slug' => fake()->slug,
            'thumbnail_id' => Media::factory()->create()->getKey(),
            'thumbnail_alt' => fake()->words(3, true),
            'status' => PostStatus::PUBLISHED,
            'lang' => 'en',
            'excerpt' => fake()->text,
            'content' => [
                [
                    'type' => CustomComponent::BlogMarkdownText->value,
                    'data' => [
                        'content' => '# Some title'
                    ],
                ],
            ],
            'meta_title' => $this->faker->text(30),
            'meta_description' => $this->faker->text(50),
            'meta_keywords' => $this->faker->word . ',' . $this->faker->word,
            'opengraph_title' => $this->faker->text(30),
            'opengraph_description' => $this->faker->text(30),
            'opengraph_picture' => null,
            'disable_indexation' => false,
            'published_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (Model $post): void {
            /** @var Post $post */
            if ($post->translation_origin_model_id) {
                return;
            }

            $post->update(['translation_origin_model_id' => $post->getKey()]);

            if ($post->categories()->count() === 0) {
                $category = CategoryFactory::new()->create();
                $post->categories()->attach($category);
            }
        });
    }

    public function draft(): static
    {
        return $this->state(function (): array {
            return [
                'status' => PostStatus::DRAFT->value,
            ];
        });
    }

    public function asATranslationFrom(Post $post, string $lang): static
    {
        return $this->state(function (array $attributes) use ($lang, $post): array {
            return [
                'lang' => $lang,
                'translation_origin_model_id' => $post->getKey(),
            ];
        });
    }

    public function forCategory(Category $category): static
    {
        return $this->afterCreating(function (Model $post) use ($category): void {
            /** @var Post $post */
            $post->categories()->attach($category);
            $post->save();
        });
    }

    public function forAuthor(Author $author): static
    {
        return $this->afterCreating(function (Model $post) use ($author): void {
            /** @var Post $post */
            $post->authors()->attach($author);
            $post->save();
        });
    }
}
