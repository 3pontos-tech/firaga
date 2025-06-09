<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\CMS\Category;
use App\Models\CMS\Post;

class ArticlesController extends Controller
{
    public function getArticles(): View
    {
        $posts = Post::query()->paginate();
        $categories = Category::all();

        return view('blog.index', [
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }

    public function getArticle(Post $post): View
    {
        return view('blog.show', [
            'post' => $post,
        ]);
    }
}
