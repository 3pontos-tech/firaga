<?php

namespace App\Http\Controllers;

use App\Models\CMS\Category;
use App\Models\CMS\Post;
use Illuminate\View\View;

class ArticlesController extends Controller
{
    public function index(): View
    {
        $posts = Post::query()
            ->paginate(5);
        $featuredPost = Post::query()
            ->where('is_top_article', true)
            ->where('status', 'published')
            ->orderByDesc('published_at')
            ->first();
        $categories = Category::all();

        return view('blog.index', [
            'posts' => $posts,
            'categories' => $categories,
            'featuredPost' => $featuredPost,
        ]);
    }

    public function show(Post $post): View
    {
        $post = $post->load('categories', 'relatedPosts');
        $relatedPosts = $post->relatedPosts;

        if ($relatedPosts->isEmpty()) {
            $relatedPosts = Post::query()
                ->whereHas('categories', function ($query) use ($post): void {
                    $query->whereIn('id', $post->categories->pluck('id'));
                })
                ->where('id', '!=', $post->id)
                ->inRandomOrder()
                ->with('categories')
                ->limit(3)
                ->get();
        }

        return view('blog.show', [
            'post' => $post,
            'relatedPosts' => $relatedPosts,
        ]);
    }
}
