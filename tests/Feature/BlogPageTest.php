<?php

declare(strict_types=1);

use App\Models\CMS\Post;
use Livewire\Livewire;

it('renders the blog page with hero and article sections', function (): void {
    Post::factory()->count(3)->create();

    $response = $this->get(route('blog'));

    $response
        ->assertSuccessful()
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

    $response->assertSuccessful()->assertSeeText('Primeiro Destaque')->assertSeeText('Segundo Destaque');
});

it('excludes featured articles from the list', function (): void {
    $featured = Post::factory()->create(['title' => 'Artigo em Destaque', 'is_top_article' => true]);
    Post::factory()->create(['title' => 'Artigo Regular']);

    Livewire::test('blog-posts', ['excludedIds' => [$featured->id]])
        ->assertSee('Artigo Regular')
        ->assertDontSee('Artigo em Destaque');
});

it('keeps the article list spacing on the .section token, without margin overrides', function (): void {
    Post::factory()->count(2)->create();

    $content = (string) $this->get(route('blog'))->assertSuccessful()->getContent();

    preg_match('/<section[^>]*>(?=(?:(?!<\/section>).)*Confira todos os)/s', $content, $matches);

    expect($matches)->not->toBeEmpty();

    expect($matches[0])->toContain('class="section"')->not->toMatch('/\bmd:mt-20!/');
});

it('renders the featured card title and excerpt without a gap between them', function (): void {
    Post::factory()->create(['title' => 'Artigo em Destaque', 'is_top_article' => true]);

    $content = (string) $this->get(route('blog'))->assertSuccessful()->getContent();

    preg_match('/<a[^>]*rounded-none[^>]*>.*?<\/a>/s', $content, $matches);

    expect($matches)->not->toBeEmpty();

    preg_match('/<div class="([^"]*flex-1[^"]*)"/', $matches[0], $wrapper);

    expect($wrapper)->not->toBeEmpty();

    expect($wrapper[1])->not->toMatch('/\bgap-/');
});

it('paginates the article list six per page', function (): void {
    Post::factory()->count(8)->create();

    $component = Livewire::test('blog-posts', ['excludedIds' => []]);

    expect($component->instance()->posts)->count()->toBe(6)->total()->toBe(8)->hasMorePages()->toBeTrue();

    $component->assertSee('Exibindo 6 resultados');

    $component->call('nextPage')->assertSee('Exibindo 2 resultados');
});

it('renders without featured articles', function (): void {
    Post::factory()
        ->count(2)
        ->create(['is_top_article' => false]);

    $this->get(route('blog'))->assertSuccessful();
});

it('renders the hero with the Figma title scale and copy', function (): void {
    $content = (string) $this->get(route('blog'))->assertSuccessful()->getContent();

    expect($content)
        ->toContain('lg:text-7xl!')
        ->toContain('consolidar seu patrimônio ou aumentar seus rendimentos');
});

it('renders listing cards with the Figma radius and padding', function (): void {
    Post::factory()->create(['title' => 'Artigo Regular']);

    $html = Livewire::test('blog-posts', ['excludedIds' => []])->html();

    preg_match('/<a[^>]*md:flex-col[^>]*>/', $html, $card);

    expect($card)->not->toBeEmpty();
    expect($card[0])->toContain('rounded-xs')->toContain('p-3')->not->toContain('rounded-sm');
});

it('spaces the article grid columns by 54px as in Figma', function (): void {
    Post::factory()->count(3)->create();

    expect(Livewire::test('blog-posts', ['excludedIds' => []])->html())->toContain('md:gap-x-[54px]');
});

it('renders pagination boxes at the Figma sizes', function (): void {
    Post::factory()->count(8)->create();

    $html = Livewire::test('blog-posts', ['excludedIds' => []])->html();

    expect(mb_substr_count($html, 'size-12'))->toBe(2);
    expect(mb_substr_count($html, 'size-10'))->toBe(2);
    expect($html)->toContain('Última página');
});

it('renders the newsletter banner with the Figma frame, radius and copy', function (): void {
    $content = (string) $this->get(route('blog'))->assertSuccessful()->getContent();

    expect($content)
        ->toContain('md:rounded-md')
        ->toContain('md:p-16')
        ->toContain('md:max-w-[801px]')
        ->toContain('md:max-w-[756px]')
        ->toContain('md:gap-[29px]')
        ->toContain('md:min-w-[185px]')
        ->toContain('mercado financeiro, nacional e global');
});

it('positions the newsletter image by the asset own alpha mask, without a clip-path', function (): void {
    $content = (string) $this->get(route('blog'))->assertSuccessful()->getContent();

    expect($content)
        ->toContain('blog-imagem_1.webp')
        ->toContain('top-[4.9%]')
        ->toContain('right-[2.32%]')
        ->toContain('h-[91.75%]')
        ->not->toContain('clipPathUnits')
        ->not->toContain('newsletter-image-clip');
});
