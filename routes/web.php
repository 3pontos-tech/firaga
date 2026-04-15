<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MarketingLandingController;
use App\Http\Controllers\PagesController;
use App\Models\Term;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

if (app()->isLocal()) {
    Route::view('/test', 'test');
}

Route::view('/consultoria/sucesso', 'success')->name('payment.success');

Route::domain('lp.' . config('app.domain'))->group(function (): void {

    Route::redirect('/', config('app.url'));

    Route::get('/{page:slug}', MarketingLandingController::class)
        ->name('landing.lp');
});

Route::domain(config('app.domain'))->group(function (): void {

    Route::prefix('blog')->group(function (): void {
        Route::get('/{post:slug}', [ArticlesController::class, 'show'])
            ->name('blog.show');
    });

    Route::get('/terms/{slug}', function (string $slug): Factory|View {
        $term = Term::query()
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('terms.show', [
            'term' => $term,
            'sections' => $term->content ?? [],
        ]);
    })->name('terms.show');

    Route::get(config('app.url'))->name('landing');

    Route::get('/{page?}', [PagesController::class, 'show'])
        ->name('page.show')
        ->where('page', '[a-zA-Z0-9\-]+');

    Route::get('/contact', ContactController::class)
        ->name('contact');

});
