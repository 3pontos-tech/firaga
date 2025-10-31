<?php

namespace App\Filament\Components\Blog;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use App\Filament\Components\DTOs\HeadlineComponent;
use App\Models\CMS\Category;
use App\Models\CMS\Post;

class BlogListingComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.blog.listing';

    public static function blockSchema(): array
    {
        return [
            ...HeadlineComponent::form(),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::BlogArticleList->value;
    }

    public static function getGroup(): string
    {
        return 'Blog';
    }

    public static function setupRenderPayload(array $data): array
    {
        $posts = Post::query()
            ->paginate(5);
        $featuredPost = Post::query()
            ->where('is_top_article', true)
            ->where('status', 'published')
            ->latest('published_at')
            ->first();
        $categories = Category::all();

        return [
            'headline' => HeadlineComponent::make($data['headline']),
            'posts' => $posts,
            'categories' => $categories,
            'featuredPost' => $featuredPost,
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function featuredColor(): string
    {
        return 'gray';
    }
}
