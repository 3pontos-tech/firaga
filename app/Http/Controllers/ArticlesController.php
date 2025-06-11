<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\CMS\Category;
use App\Models\CMS\Post;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class ArticlesController extends Controller
{
    public function getArticles(): View
    {
        $posts = Post::query()
            ->join('media', 'posts.thumbnail_id', '=', 'media.id')
            ->join('post_author', 'posts.id', '=', 'post_author.post_id')
            ->join('authors', 'post_author.author_id', '=', 'authors.id')
            ->select('posts.*', 'authors.name as author_name', 'authors.slug as author_slug', 'media.id as thumbnail_id', 'media.alt as thumbnail_alt')
            ->where('status', '=', 'published')
            ->orderByDesc('published_at')
            ->paginate(10);
        $categories = Category::all();
        $authors = Author::with('thumbnail')->get();

        return view('blog.index', [
            'posts' => $posts,
            'categories' => $categories,
            'authors' => $authors,
        ]);
    }

    public function getArticle(Post $post): View
    {
        return view('blog.show', [
            'post' => $post,
        ]);
    }
}
