<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Enums\PostStatus;
use App\Models\CMS\Post;
use Illuminate\Contracts\View\View;

class BlogController extends Controller
{
    public function index(): View
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

    public function show(Post $post): View
    {
        abort_unless($post->isPublished(), 404);

        $post->load(['author', 'categories']);

        $relatedPosts = $post->relatedPosts()
            ->where('status', PostStatus::PUBLISHED)
            ->with(['author', 'categories'])
            ->latest('published_at')
            ->take(3)
            ->get();

        if ($relatedPosts->isEmpty()) {
            $relatedPosts = Post::query()
                ->where('status', PostStatus::PUBLISHED)
                ->whereKeyNot($post->getKey())
                ->with(['author', 'categories'])
                ->latest('published_at')
                ->take(3)
                ->get();
        }

        return view('pages.blog-show', ['post' => $post, 'relatedPosts' => $relatedPosts]);
    }
}
