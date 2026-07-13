<?php

declare(strict_types=1);

it('exibe os links diretos de desktop na navbar', function (): void {
    $this->get('/')
        ->assertOk()
        ->assertSee('Serviços')
        ->assertSee('Carreira')
        ->assertSee('Quem somos')
        ->assertSee('Blog');
});

it('destaca o link da página atual', function (): void {
    $this->get('/')
        ->assertOk()
        ->assertSee('aria-current="page"', escape: false)
        ->assertSee('bg-brand-primary');
});

it('destaca o link de serviços na página nossos serviços', function (): void {
    $this->get(route('nossos-servicos'))
        ->assertOk()
        ->assertSee('aria-current="page"', escape: false);
});
