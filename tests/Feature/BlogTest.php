<?php

declare(strict_types=1);

use App\Models\Author;
use App\Models\CMS\Post;

it('displays a published post', function (): void {
    $author = Author::factory()->create(['name' => 'Maria Souza']);
    $post = Post::factory()->forAuthor($author)->create([
        'title' => 'Como organizar suas finanças',
        'slug' => 'como-organizar-suas-financas',
        'excerpt' => 'Um guia prático para começar hoje.',
    ]);

    $this->get('/blog/'.$post->slug)
        ->assertSuccessful()
        ->assertSee('Como organizar suas finanças')
        ->assertSee('Um guia prático para começar hoje.')
        ->assertSee('Maria Souza');
});

it('returns 404 for a draft post', function (): void {
    $post = Post::factory()->draft()->create();

    $this->get('/blog/'.$post->slug)->assertNotFound();
});

it('returns 404 for a non-existent slug', function (): void {
    $this->get('/blog/non-existent-slug')->assertNotFound();
});

it('generates the slug-based named route', function (): void {
    $post = Post::factory()->create(['slug' => 'meu-artigo']);

    expect(route('blog.show', $post))->toContain('/blog/meu-artigo');
});

it('shows curated related posts and hides drafts among them', function (): void {
    $post = Post::factory()->create(['slug' => 'principal']);
    $publishedRelated = Post::factory()->create(['title' => 'Publicado Relacionado', 'slug' => 'relacionado']);
    $draftRelated = Post::factory()->draft()->create(['title' => 'Rascunho Relacionado']);

    $post->relatedPosts()->attach([$publishedRelated->id, $draftRelated->id]);

    $this->get('/blog/'.$post->slug)
        ->assertSuccessful()
        ->assertSee('Leia também')
        ->assertSee('Publicado Relacionado')
        ->assertSee('/blog/'.$publishedRelated->slug)
        ->assertDontSee('Rascunho Relacionado');
});

it('falls back to recent posts when none are curated', function (): void {
    $post = Post::factory()->create(['slug' => 'principal']);
    $other = Post::factory()->create(['title' => 'Outro Artigo', 'slug' => 'outro']);

    $this->get('/blog/'.$post->slug)
        ->assertSuccessful()
        ->assertSee('Leia também')
        ->assertSee('Outro Artigo')
        ->assertSee('/blog/'.$other->slug);
});

it('omits the related section when there are no other posts', function (): void {
    $post = Post::factory()->create(['slug' => 'principal']);

    $this->get('/blog/'.$post->slug)
        ->assertSuccessful()
        ->assertDontSee('Leia também');
});

it('links posts on the blog index to their show pages', function (): void {
    $featured = Post::factory()->create(['is_top_article' => true, 'slug' => 'artigo-destaque']);
    $listed = Post::factory()->create(['is_top_article' => false, 'slug' => 'artigo-listado']);

    $this->get(route('blog'))
        ->assertSuccessful()
        ->assertSee('/blog/'.$featured->slug)
        ->assertSee('/blog/'.$listed->slug);
});
