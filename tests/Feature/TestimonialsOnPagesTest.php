<?php

declare(strict_types=1);

use App\Models\Testimonial;

it('features only the most recent testimonial on the home page', function (): void {
    Testimonial::factory()->create(['name' => 'Mais recente', 'posted_at' => now()->subDay()]);
    Testimonial::factory()->create(['name' => 'Segundo mais recente', 'posted_at' => now()->subWeek()]);
    Testimonial::factory()->create(['name' => 'Mais antigo', 'posted_at' => now()->subMonths(6)]);

    $this->get('/')
        ->assertOk()
        ->assertSee('Mais recente')
        ->assertDontSee('Segundo mais recente')
        ->assertDontSee('Mais antigo');
});

it('shows different testimonials on the key-account page than on the home page', function (): void {
    Testimonial::factory()->create(['name' => 'Home 1', 'posted_at' => now()->subDay()]);
    Testimonial::factory()->create(['name' => 'Home 2', 'posted_at' => now()->subWeek()]);
    Testimonial::factory()->create(['name' => 'Home 3', 'posted_at' => now()->subWeeks(2)]);
    Testimonial::factory()->create(['name' => 'Home 4', 'posted_at' => now()->subMonth()]);
    Testimonial::factory()->create(['name' => 'Key Account 1', 'posted_at' => now()->subMonths(2)]);
    Testimonial::factory()->create(['name' => 'Key Account 2', 'posted_at' => now()->subMonths(3)]);

    $home = $this->get('/');
    $keyAccount = $this->get(route('key-account'));

    $home->assertOk()->assertSee('Home 1')->assertDontSee('Key Account 1')->assertDontSee('Key Account 2');

    $keyAccount->assertOk()
        ->assertSee('Key Account 1')
        ->assertSee('Key Account 2')
        ->assertDontSee('Home 1')
        ->assertDontSee('Home 2')
        ->assertDontSee('Home 3')
        ->assertDontSee('Home 4');
});

it('does not break the homepage or key-account page when no testimonials exist', function (): void {
    $this->get('/')->assertOk();
    $this->get(route('key-account'))->assertOk();
});
