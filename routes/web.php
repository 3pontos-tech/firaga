<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MarketingLandingController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

if(app()->isLocal()) {
    Route::view('/test', 'test');
}

Route::domain('lp.' . config('app.domain'))->group(function (): void {

    Route::redirect('/', config('app.url'));

    Route::get('/{page:slug}', MarketingLandingController::class)
        ->name('landing.lp');
});

Route::domain(config('app.domain'))->group(function (): void {

    Route::prefix('blog')->group(function (): void {
        Route::get('/', [ArticlesController::class, 'index'])
            ->name('blog.index');
        Route::get('/{post:slug}', [ArticlesController::class, 'show'])
            ->name('blog.show');
    });

    Route::get(config('app.url'))->name('landing');

    Route::get('/{page?}', [PagesController::class, 'show'])
        ->name('page.show')
        ->where('page', '[a-zA-Z0-9\-]+');

    Route::get('/contact', ContactController::class)
        ->name('contact');

});
