<?php

declare(strict_types=1);

use App\Models\CMS\Post;

it('exibe a página quem somos', function (): void {
    $this->get('/quem-somos')
        ->assertOk()
        ->assertSee('Estratégia hoje')
        ->assertSee('O futuro que queremos construir')
        ->assertSee('O que sustenta nossa atuação')
        ->assertSee('Confira nosso');
});

it('mostra o link Quem somos na navegação', function (): void {
    $this->get('/quem-somos')
        ->assertOk()
        ->assertSee(route('quem-somos'));
});

it('exibe os últimos posts publicados na seção de blog', function (): void {
    Post::factory()->create(['title' => 'Artigo Mais Recente', 'published_at' => now()]);

    $this->get('/quem-somos')
        ->assertOk()
        ->assertSeeText('Artigo Mais Recente');
});
