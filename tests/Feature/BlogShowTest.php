<?php

declare(strict_types=1);

use App\Models\CMS\Post;

it('renders the markdown body of a blog post', function (): void {
    $this->withoutVite();

    $post = Post::factory()->create([
        'excerpt' => 'Resumo do artigo de teste.',
        'content' => [
            [
                'type' => 'blog-markdown-text',
                'data' => ['content' => "## Subtítulo de teste\n\nParágrafo do **corpo** do artigo.\n\n- item um\n- item dois"],
            ],
        ],
    ]);

    $this->get(route('blog.show', $post))
        ->assertOk()
        ->assertSee('Subtítulo de teste', false)
        ->assertSee('Parágrafo do', false)
        ->assertSee('<h2', false)
        ->assertSee('<li>item um</li>', false);
});

it('returns 404 for a draft post', function (): void {
    $this->withoutVite();

    $post = Post::factory()->draft()->create();

    $this->get(route('blog.show', $post))->assertNotFound();
});
