<?php

declare(strict_types=1);

use App\Http\Controllers\BlogController;
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

Route::domain('lp.'.config('app.domain'))->group(function (): void {

    Route::redirect('/', config('app.url'));

    Route::get('/{page:slug}', MarketingLandingController::class)
        ->name('landing.lp');
});

Route::domain(config('app.domain'))->group(function (): void {

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

    Route::get('/', [PagesController::class, 'show'])->name('home');
    Route::view('/key-account', 'pages.key-account')->name('key-account');
    Route::view('/code-capital', 'pages.code-capital')->name('code-capital');
    Route::view('/nossos-servicos', 'pages.nossos-servicos')->name('nossos-servicos');
    Route::view('/trabalhe-conosco', 'pages.trabalhe-conosco')->name('trabalhe-conosco');
    Route::get('/blog', BlogController::class)->name('blog');
    Route::view('/parcerias', 'pages.parcerias')->name('parcerias');

    Route::get('/{page?}', [PagesController::class, 'show'])
        ->name('page.show')
        ->where('page', '[a-zA-Z0-9\-]+');

});
