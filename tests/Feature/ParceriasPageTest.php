<?php

declare(strict_types=1);

it('exibe a página de parcerias', function (): void {
    $this->get(route('parcerias'))
        ->assertOk()
        ->assertSee('Quem pode ser parceiro da')
        ->assertSee('O que buscamos')
        ->assertSee('Influenciadores e criadores de conteúdo.');
});

it('usa a mesma largura das demais seções no hero', function (): void {
    $content = (string) $this->get(route('parcerias'))->assertOk()->getContent();

    preg_match('/<div class="container[^"]*"[^>]*data-reveal-stagger/', $content, $matches);

    expect($matches)->not->toBeEmpty();

    expect($matches[0])->not->toMatch('/\bmd:p[rl]-60\b/');
});

it('mantém apenas a descrição do hero com a largura reduzida', function (): void {
    $content = (string) $this->get(route('parcerias'))->assertOk()->getContent();

    preg_match('/<p[^>]*fr-headline-description[^>]*>\s*Não trabalhamos com parcerias/u', $content, $matches);

    expect($matches)->not->toBeEmpty();

    expect($matches[0])->toContain('md:px-60');
});

it('limita a altura da imagem de topo no mobile', function (): void {
    $content = (string) $this->get(route('parcerias'))->assertOk()->getContent();

    preg_match('/<img[^>]*parcerias_1x\.webp[^>]*md:hidden[^>]*>/s', $content, $matches);

    expect($matches)->not->toBeEmpty();

    expect($matches[0])->toContain('max-h-82')->toContain('object-cover');
});

it('centraliza verticalmente a imagem ao lado de "quem pode ser parceiro"', function (): void {
    $content = (string) $this->get(route('parcerias'))->assertOk()->getContent();

    expect($content)->toContain('md:basis-2/5 md:self-center');

    preg_match('/<img[^>]*parcerias_1x\.webp[^>]*object-contain[^>]*>/s', $content, $matches);

    expect($matches)->not->toBeEmpty();

    expect($matches[0])->toContain('object-center')->not->toContain('object-top');
});

it('encolhe o botão do formulário e o joga para a direita a partir do md', function (): void {
    $content = (string) $this->get(route('parcerias'))->assertOk()->getContent();

    preg_match('/<button[^>]*type="submit"[^>]*>/', $content, $matches);

    expect($matches)->not->toBeEmpty();

    expect($matches[0])->toContain('md:self-end')->not->toContain('fr-button-block');
});
