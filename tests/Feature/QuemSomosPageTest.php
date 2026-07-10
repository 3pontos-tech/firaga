<?php

declare(strict_types=1);

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
