<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', LandingController::class);

Route::prefix('blog')->group(function () {
    Route::get('/', [ArticlesController::class, 'getArticles'])
        ->name('blog.index');
    Route::get('/{post:slug}', [ArticlesController::class, 'getArticle'])
        ->name('blog.show');
});

Route::get('/{page:slug}', [PagesController::class, 'getPage'])
    ->name('page.show')
    ->where('page', '[a-zA-Z0-9\-]+');
