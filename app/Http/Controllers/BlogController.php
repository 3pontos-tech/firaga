<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Enums\PostStatus;
use App\Models\CMS\Post;
use Illuminate\Contracts\View\View;

class BlogController extends Controller
{
    public function __invoke(): View
    {
        $featured = Post::query()
            ->where('status', PostStatus::PUBLISHED)
            ->where('is_top_article', true)
            ->with(['author', 'categories'])
            ->latest('published_at')
            ->first();

        $posts = Post::query()
            ->where('status', PostStatus::PUBLISHED)
            ->when($featured, fn ($q) => $q->where('id', '!=', $featured->id))
            ->with(['author', 'categories'])
            ->latest('published_at')
            ->paginate(5);

        return view('pages.blog', ['featured' => $featured, 'posts' => $posts]);
    }
}
