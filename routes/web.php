<?php

declare(strict_types=1);

use App\Enums\PostStatus;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MarketingLandingController;
use App\Http\Controllers\PagesController;
use App\Models\CMS\Post;
use App\Models\Term;
use App\Models\Testimonial;
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
    Route::get('/key-account', fn (): View => view('pages.key-account', [
        // Skip the 4 most recent testimonials shown on the homepage so the two pages stay diversified.
        'testimonials' => Testimonial::query()->with('media')->latest('posted_at')->skip(4)->take(3)->get(),
    ]))->name('key-account');
    Route::view('/code-capital', 'pages.code-capital')->name('code-capital');
    Route::view('/nossos-servicos', 'pages.nossos-servicos')->name('nossos-servicos');
    Route::view('/trabalhe-conosco', 'pages.trabalhe-conosco')->name('trabalhe-conosco');
    Route::get('/blog', BlogController::class)->name('blog');
    Route::view('/parcerias', 'pages.parcerias')->name('parcerias');
    Route::get('/quem-somos', fn (): View => view('pages.quem-somos', [
        'posts' => Post::query()
            ->where('status', PostStatus::PUBLISHED)
            ->with(['author', 'categories'])
            ->latest('published_at')
            ->take(3)
            ->get(),
    ]))->name('quem-somos');

    Route::get('/{page?}', [PagesController::class, 'show'])
        ->name('page.show')
        ->where('page', '[a-zA-Z0-9\-]+');

});
