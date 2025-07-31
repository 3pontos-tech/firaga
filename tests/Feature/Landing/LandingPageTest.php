<?php

use App\Models\CMS\Page;
use App\Models\Testimonial;
use Database\Seeders\CMS\MenusSeeder;
use Database\Seeders\CMS\PagesSeeder;
use Database\Seeders\TestimonialsSeeder;
use Illuminate\Support\Str;

use function Pest\Laravel\get;
use function Pest\Laravel\seed;

beforeEach(function (): void {
    seed(TestimonialsSeeder::class);
    seed(PagesSeeder::class);
    seed(MenusSeeder::class);
});

it('should loads the avatar_image on pages that has testimonials', closure: function (): void {
    $testimonial = Testimonial::query()->first();

    $avatar = Str::remove('http://localhost:8000/storage/1/', $testimonial->getFirstMediaUrl('avatar'));
    $pages = Page::query()->whereIn('slug', ['code-capital', '/', 'key-account'])->get();

    $pages->each(function ($page) use ($avatar): void {
        $response = get(route('page.show', $page->slug));
        $response->assertSuccessful();
        $response->assertSee($avatar);
    });
});

test('pages without testimonial should not render the testimonial avatar', function (): void {
    $testimonial = Testimonial::query()->first();

    $avatar = Str::remove('http://localhost:8000/storage/1/', $testimonial->getFirstMediaUrl('avatar'));
    $pages = Page::query()
        ->whereNotIn('slug', ['code-capital', '/', 'key-account'])
        ->where('status', 'published')->get();

    $pages->each(function ($page) use ($avatar): void {
        $response = get(route('page.show', $page->slug));
        $response->assertSuccessful();
        $response->assertDontSee($avatar);
    });
});
