<?php

declare(strict_types=1);

it('exibe a página trabalhe conosco', function (): void {
    $this->get(route('trabalhe-conosco'))
        ->assertOk()
        ->assertSee('vidas começando pela sua')
        ->assertSee('Comece sua carreira')
        ->assertSee('Imersão na metodologia.')
        ->assertSee('Primeiros atendimentos com mentoria.')
        ->assertSee('Carteira própria e autonomia.')
        ->assertSee('do que currículo.')
        ->assertSee('O que buscamos...')
        ->assertSee('Sua carreira pode começar antes da experiência.');
});

it('mantém o título do hero na escala h1 do design (36px no mobile, 48px no desktop)', function (): void {
    $response = $this->get(route('trabalhe-conosco'));

    $response->assertOk();

    preg_match('/<h2[^>]*fr-headline-title[^>]*>[^<]*<mark>Transforme/', (string) $response->getContent(), $matches);

    expect($matches)->not->toBeEmpty();

    expect($matches[0])
        ->not->toContain('sm:text-5xl')
        ->not->toContain('md:text-7xl');
});

it('usa o espaçamento superior do hero de 80px em telas médias e maiores', function (): void {
    $response = $this->get(route('trabalhe-conosco'));

    $response->assertOk();

    preg_match('/<section id="hero"[^>]*>/', (string) $response->getContent(), $matches);

    expect($matches)->not->toBeEmpty();

    expect($matches[0])->toContain('md:pt-20')->not->toMatch('/\bmd:pt-8\b/');
});

it('distribui as colunas do hero e do propósito na proporção do design', function (): void {
    $content = (string) $this->get(route('trabalhe-conosco'))->assertOk()->getContent();

    expect(mb_substr_count($content, 'md:basis-1/2'))->toBe(2);
    expect($content)->not->toContain('md:basis-3/5');
});

it('destaca em negrito o trecho sobre o propósito da vaga', function (): void {
    $this->get(route('trabalhe-conosco'))
        ->assertOk()
        ->assertSee('<strong>para quê você quer estar aqui</strong>', escape: false);
});

it('limita a descrição da seção de carreira a 900px sem estreitar o título', function (): void {
    $response = $this->get(route('trabalhe-conosco'));

    $response->assertOk();

    $content = (string) $response->getContent();

    expect($content)->toContain('max-w-[900px]!')->not->toContain('max-w-3xl');
});

it('separa os cartões de etapa com o gap de 32px do design', function (): void {
    $this->get(route('trabalhe-conosco'))
        ->assertOk()
        ->assertSee('md:grid-cols-3 md:gap-8', escape: false);
});

it('aplica o gradiente vertical da marca no banner de CTA', function (): void {
    $response = $this->get(route('trabalhe-conosco'));

    $response->assertOk();

    preg_match('/<section[^>]*id="cta-banner"[^>]*>/', (string) $response->getContent(), $matches);

    expect($matches)->not->toBeEmpty();

    expect($matches[0])
        ->toContain('from-brand-primary')
        ->toContain('to-brand-secondary')
        ->toContain('bg-linear-to-b');
});

it('renderiza o botão do hero como link sem vazar atributos inválidos', function (): void {
    $response = $this->get(route('trabalhe-conosco'));

    $response->assertOk();

    preg_match('/<a[^>]*>\s*<span[^>]*>\s*Enviar currículo/u', (string) $response->getContent(), $matches);

    expect($matches)->not->toBeEmpty();

    expect($matches[0])->toContain('target="_blank"')->not->toContain('tag="a"');
});
