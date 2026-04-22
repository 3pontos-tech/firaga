<?php

declare(strict_types=1);

namespace Database\Factories\CMS;

use App\Enums\PostStatus;
use App\Models\Author;
use App\Models\CMS\Category;
use App\Models\CMS\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends Factory<Post>
 */
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
            'content' => [],
            'meta_title' => fake()->text(30),
            'meta_description' => fake()->text(50),
            'meta_keywords' => fake()->word.','.fake()->word,
            'opengraph_title' => fake()->text(30),
            'opengraph_description' => fake()->text(30),
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
        return $this->state(fn (): array => [
            'status' => PostStatus::DRAFT->value,
        ]);
    }

    public function asATranslationFrom(Post $post, string $lang): static
    {
        return $this->state(fn (array $attributes): array => [
            'lang' => $lang,
            'translation_origin_model_id' => $post->getKey(),
        ]);
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
