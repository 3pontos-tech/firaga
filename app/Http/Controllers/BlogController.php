<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Enums\PostStatus;
use App\Models\CMS\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;

class BlogController extends Controller
{
    public function __invoke(): View
    {
        /** @var Collection<int, Post> $featured */
        $featured = Post::query()
            ->where('status', PostStatus::PUBLISHED)
            ->where('is_top_article', true)
            ->with(['author', 'categories'])
            ->latest('published_at')
            ->take(2)
            ->get();

        return view('pages.blog', [
            'featured' => $featured,
            'excludedIds' => $featured->pluck('id')->all(),
        ]);
    }
}
