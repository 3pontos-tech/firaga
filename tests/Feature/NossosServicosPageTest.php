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

it('cobre a foto do atendimento premium com o mesmo recorte orgânico, em preto', function (): void {
    $response = $this->get(route('nossos-servicos'));

    $response->assertOk();

    preg_match(
        '/<section[^>]*\bdark\b[^>]*>(?:(?!<\/section>).)*man-walking-stair(?:(?!<\/section>).)*<\/section>/s',
        (string) $response->getContent(),
        $matches,
    );

    expect($matches)->not->toBeEmpty();

    $section = $matches[0];

    preg_match('/<div class="relative[^"]*"[^>]*>(?:(?!<\/div>).)*man-walking-stair.*?<\/svg>/s', $section, $wrapper);

    expect($wrapper)->not->toBeEmpty();

    expect($wrapper[0])->toContain('viewBox="0 0 732 640"')->toContain('text-elevation-surface');
});

it('mostra os três perfis de plano', function (): void {
    $this->get(route('nossos-servicos'))
        ->assertOk()
        ->assertSee('Perfil Gold')
        ->assertSee('Perfil Platinum')
        ->assertSee('Perfil Black');
});
