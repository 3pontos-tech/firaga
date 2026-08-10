<?php

declare(strict_types=1);

use App\Enums\PostStatus;
use App\Models\CMS\Post;

it('opens a published post by its slug', function (): void {
    $post = Post::factory()->create([
        'title' => 'Como organizar sua vida financeira',
        'slug' => 'como-organizar-sua-vida-financeira',
        'excerpt' => 'Um guia direto para começar hoje.',
    ]);

    $this->get(route('blog.show', $post))
        ->assertOk()
        ->assertSee('Como organizar sua vida financeira')
        ->assertSee('Um guia direto para começar hoje.')
        ->assertSee('Voltar ao blog');
});

it('renders the markdown blocks of the post content', function (): void {
    $post = Post::factory()->create([
        'content' => [
            [
                'type' => 'blog-markdown-text',
                'data' => ['content' => "## Primeiro passo\n\nDiagnóstico antes do plano."],
            ],
        ],
    ]);

    $this->get(route('blog.show', $post))
        ->assertOk()
        ->assertSee('<h2>Primeiro passo</h2>', false)
        ->assertSee('Diagnóstico antes do plano.');
});

it('caps the cover image height', function (): void {
    $post = Post::factory()->create();

    $content = (string) $this->get(route('blog.show', $post))->assertOk()->getContent();

    preg_match('/<img[^>]*aspect-16\/9[^>]*>/', $content, $matches);

    expect($matches)->not->toBeEmpty();

    expect($matches[0])->toContain('max-h-96')->not->toContain('aspect-2/1');
});

it('returns 404 for a post that is not published', function (): void {
    $post = Post::factory()->create(['status' => PostStatus::DRAFT]);

    $this->get(route('blog.show', $post))->assertNotFound();
});

it('lists other published posts under "leia também"', function (): void {
    $post = Post::factory()->create(['title' => 'Artigo Principal']);
    Post::factory()->create(['title' => 'Outro Artigo']);

    $this->get(route('blog.show', $post))
        ->assertOk()
        ->assertSee('Leia')
        ->assertSee('Outro Artigo')
        ->assertDontSee('Artigo Principal</h3>', false);
});

it('links every card on the blog listing to its post page', function (): void {
    $post = Post::factory()->create(['slug' => 'post-linkado']);

    $this->get(route('blog'))->assertOk()->assertSee(route('blog.show', $post), false);
});
