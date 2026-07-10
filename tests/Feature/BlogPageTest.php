<?php

declare(strict_types=1);

use App\Models\CMS\Post;
use Livewire\Livewire;

it('renders the blog page with hero and article sections', function (): void {
    Post::factory()->count(3)->create();

    $response = $this->get(route('blog'));

    $response->assertSuccessful()
        ->assertSee('Conteúdo que')
        ->assertSee('transforma')
        ->assertSee('Confira todos os')
        ->assertSee('nossos artigos');
});

it('shows up to two top articles as featured', function (): void {
    Post::factory()->create(['title' => 'Primeiro Destaque', 'is_top_article' => true]);
    Post::factory()->create(['title' => 'Segundo Destaque', 'is_top_article' => true]);
    Post::factory()->create(['title' => 'Terceiro Destaque', 'is_top_article' => true]);
    Post::factory()->create(['title' => 'Artigo Comum']);

    $response = $this->get(route('blog'));

    $response->assertSuccessful()
        ->assertSeeText('Primeiro Destaque')
        ->assertSeeText('Segundo Destaque');
});

it('excludes featured articles from the list', function (): void {
    $featured = Post::factory()->create(['title' => 'Artigo em Destaque', 'is_top_article' => true]);
    Post::factory()->create(['title' => 'Artigo Regular']);

    Livewire::test('blog-posts', ['excludedIds' => [$featured->id]])
        ->assertSee('Artigo Regular')
        ->assertDontSee('Artigo em Destaque');
});

it('paginates the article list six per page', function (): void {
    Post::factory()->count(8)->create();

    $component = Livewire::test('blog-posts', ['excludedIds' => []]);

    expect($component->instance()->posts)
        ->count()->toBe(6)
        ->total()->toBe(8)
        ->hasMorePages()->toBeTrue();

    $component->assertSee('Exibindo 6 resultados');

    $component->call('nextPage')->assertSee('Exibindo 2 resultados');
});

it('renders without featured articles', function (): void {
    Post::factory()->count(2)->create(['is_top_article' => false]);

    $this->get(route('blog'))->assertSuccessful();
});
