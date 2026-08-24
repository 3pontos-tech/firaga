<?php

declare(strict_types=1);

it('exibe a página nossos serviços', function (): void {
    $this->get(route('nossos-servicos'))
        ->assertOk()
        ->assertSee('Como podemos')
        ->assertSee('benefício corporativo')
        ->assertSee('Como funciona?')
        ->assertSee('O que muda na sua vida quando existe planejamento financeiro?')
        ->assertSee('Qual é o seu momento?')
        ->assertSee('Seu dinheiro organizado com IA')
        ->assertSee('Atendimento premium')
        ->assertSee('Educa Fire');
});

it('usa o mesmo espaçamento superior do hero em tablets e telas maiores', function (): void {
    $response = $this->get(route('nossos-servicos'));

    $response->assertOk();

    preg_match('/<section[^>]*pt-\(--section-first-gap\)[^>]*>/', (string) $response->getContent(), $matches);

    expect($matches)->not->toBeEmpty();

    expect($matches[0])->toContain('sm:pt-27.5')->not->toMatch('/\bmd:pt-27\.5\b/');
});

it('recorta a foto do atendimento premium com a máscara do Figma, e não com o cutout genérico', function (): void {
    $content = (string) $this->get(route('nossos-servicos'))->assertOk()->getContent();

    expect($content)
        ->toContain('man-walking-stair')
        ->toContain('id="key-account-image-clip"')
        ->toContain('clipPathUnits="objectBoundingBox"')
        ->toContain('[clip-path:url(#key-account-image-clip)]')
        ->toContain('aspect-874/509')
        ->not->toContain('viewBox="0 0 732 640"');
});

it('empilha itens e botão do atendimento premium com o espaçamento do Figma', function (): void {
    $content = (string) $this->get(route('nossos-servicos'))->assertOk()->getContent();

    preg_match('/<section id="premium".*?<\/section>/s', $content, $matches);

    expect($matches)->not->toBeEmpty();

    expect($matches[0])
        ->toContain('md:gap-8')
        ->toContain('flex flex-col gap-4')
        ->toContain('size-4 shrink-0 text-text-high')
        ->not->toContain('md:gap-16');
});

it('mostra os três perfis de plano', function (): void {
    $this->get(route('nossos-servicos'))
        ->assertOk()
        ->assertSee('Perfil Gold')
        ->assertSee('Perfil Platinum')
        ->assertSee('Perfil Black');
});

it('aplica o gradiente da Flamma no destaque do título de benefício corporativo', function (): void {
    $this->get(route('nossos-servicos'))
        ->assertOk()
        ->assertSee(
            '<span class="from-flamma-primary to-flamma-secondary bg-linear-to-r bg-clip-text text-transparent">',
            escape: false,
        );
});

it('usa divisores na cor da marca nos cartões de plano claros', function (): void {
    $response = $this->get(route('nossos-servicos'));

    $response->assertOk();

    expect(mb_substr_count((string) $response->getContent(), '<hr class="border-brand-primary" />'))->toBe(2);
});

it('mantém a foto do planejamento na proporção do design', function (): void {
    $this->get(route('nossos-servicos'))
        ->assertOk()
        ->assertSee('aspect-538/596', escape: false);
});

it('recorta a foto do atendimento premium antes da borda da tela', function (): void {
    $this->get(route('nossos-servicos'))
        ->assertOk()
        ->assertSee('md:w-[calc(100%_+_max(0px,50vw_-_46.125rem))]', escape: false);
});
