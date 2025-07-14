<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MarketingLandingController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::domain('lp.' . config('app.domain'))->group(function (): void {

    Route::redirect('/', config('app.url'));

    Route::get('/{page:slug}', MarketingLandingController::class)
        ->name('landing.lp');
});

Route::domain(config('app.domain'))->group(function (): void {

    Route::get('/', LandingController::class)->name('landing');
    Route::view('/code-capital', 'code-capital')->name('code-capital');
    Route::view('/educa-fire', 'educafire')->name('code-capital');
    Route::view('/key-account', 'key-account')->name('code-capital');
    Route::view('/parcerias', 'parcerias')->name('code-capital');

    Route::get('/contact', ContactController::class)
        ->name('contact');

    Route::prefix('blog')->group(function (): void {
        Route::get('/', [ArticlesController::class, 'index'])
            ->name('blog.index');
        Route::get('/{post:slug}', [ArticlesController::class, 'show'])
            ->name('blog.show');
    });

    Route::get('/{page:slug}', [PagesController::class, 'show'])
        ->name('page.show')
        ->where('page', '[a-zA-Z0-9\-]+');

});
