<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Webid\Druid\Models\Category;
use Webid\Druid\Models\Post;

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
}
