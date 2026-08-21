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

it('usa âncora relativa para os links de navegação quando já está na página correspondente', function (): void {
    $this->get(route('home'))
        ->assertOk()
        ->assertSee('href="#hero"', escape: false);
});

it('usa link completo para os links de navegação de outra página', function (): void {
    $this->get(route('nossos-servicos'))
        ->assertOk()
        ->assertSee('href="'.route('home').'#hero"', escape: false);
});

it('renderiza o drill-down mobile com os links principais e botão de voltar', function (): void {
    $this->get('/')
        ->assertOk()
        ->assertSee("activeSubmenu = 'home'", escape: false)
        ->assertSee('activeSubmenu = null', escape: false)
        ->assertSee('Voltar');
});

it('pinta o "|" do logo com a cor do lettering quando o header é escuro', function (): void {
    $this->get(route('nossos-servicos'))
        ->assertOk()
        ->assertSee('[&_.st2]:text-brand-primary dark:[&_.st2]:text-text-high', escape: false);
});

it('mantém o "|" do logo em uma classe própria no svg', function (): void {
    expect(file_get_contents(public_path('images/logos/logo-with-text.svg')))
        ->toContain('.st2 {')
        ->toContain('<rect class="st2"');
});
