<?php

use App\Models\CMS\Page;
use App\Models\Testimonial;
use Database\Seeders\CMS\MenusSeeder;
use Database\Seeders\CMS\PagesSeeder;
use Database\Seeders\CMS\PostsSeeder;
use Database\Seeders\TestimonialsSeeder;
use Illuminate\Support\Str;

use function Pest\Laravel\get;
use function Pest\Laravel\seed;

it('should loads the avatar_image on pages that has testimonials', closure: function () {
    seed(TestimonialsSeeder::class);
    seed(PagesSeeder::class);
    seed(MenusSeeder::class);

    $testimonial = Testimonial::query()->first();

    $avatar = Str::remove('http://localhost:8000/storage/1/', $testimonial->getFirstMediaUrl('avatar'));
    $pages = Page::query()->whereIn('slug', ['code-capital', '/', 'key-account'])->get();

    $pages->each(function ($page) use ($avatar) {
        $response = get(route('page.show', $page->slug));
        $response->assertSuccessful();
        $response->assertSee($avatar);
    });
});
