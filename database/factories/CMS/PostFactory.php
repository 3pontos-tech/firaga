<?php

namespace Database\Factories\CMS;

use App\Enums\CustomComponent;
use App\Enums\PostStatus;
use App\Models\Author;
use App\Models\CMS\Category;
use App\Models\CMS\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => fake()->words(3, true),
            'slug' => fake()->slug,
            'author_id' => Author::factory(),
            'thumbnail_alt' => fake()->words(3, true),
            'status' => PostStatus::PUBLISHED,
            'lang' => 'en',
            'excerpt' => fake()->text,
            'content' => [
                [
                    'type' => CustomComponent::BlogMarkdownText->value,
                    'data' => [
                        'content' => '# Some title',
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
        return $this->state(fn (): array => ['author_id' => $author->getKey()]);
    }
}
