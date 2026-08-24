<?php

declare(strict_types=1);

it('renders the "por que a Firece" section with the light theme and y-axis borders', function (): void {
    $response = $this->get('/');

    $response->assertOk();

    preg_match('/<section[^>]*id="por-que-firece"[^>]*>/', (string) $response->getContent(), $matches);

    expect($matches)->not->toBeEmpty();

    $openingTag = $matches[0];

    expect($openingTag)
        ->toContain('light')
        ->and($openingTag)
        ->not->toContain('dark')
        ->and($openingTag)
        ->toContain('border-y')
        ->and($openingTag)
        ->toContain('border-border-base');
});

it('splits the hero columns with the Figma 48.8/55.44 ratio and its negative overlap', function (): void {
    $response = $this->get('/');

    $response->assertOk();

    preg_match('/<section[^>]*id="hero".*?<\/section>/s', (string) $response->getContent(), $matches);

    expect($matches)->not->toBeEmpty();

    $hero = $matches[0];

    expect($hero)
        ->toContain('md:basis-[48.8%]')
        ->and($hero)
        ->toContain('md:basis-[55.44%]')
        ->and($hero)
        ->toContain('md:-ml-[4.24%]')
        ->and($hero)
        ->toContain('md:min-h-160');
});

it('shows the whole metrics image, never cropping it to the column height', function (): void {
    $response = $this->get('/');

    $response->assertOk();

    preg_match('/<div[^>]*aspect-538\/542[^>]*>.*?<\/div>/s', (string) $response->getContent(), $matches);

    expect($matches)->not->toBeEmpty();

    $imageContainer = $matches[0];

    // O wrapper mantém a proporção 538/542 do Figma em toda largura: sem md:h-full
    // (que esticava o box até a altura do texto) e sem object-cover (que recortava).
    expect($imageContainer)
        ->toContain('images/home-imagem_2.webp')
        ->toContain('h-full w-full object-contain')
        ->not->toContain('md:aspect-auto')
        ->not->toContain('md:h-full')
        ->not->toContain('object-cover')
        ->not->toContain('max-h-[290px]');
});

it('bleeds the metrics image to 64px from the viewport edge, as in the Figma', function (): void {
    $response = $this->get('/');

    $response->assertOk();

    preg_match('/<section[^>]*id="por-que-firece".*?<\/section>/s', (string) $response->getContent(), $matches);

    expect($matches)->not->toBeEmpty();

    $section = $matches[0];

    // Em 1920: 292 (recuo do container) + 994 de conteúdo + 32 de gutter + 538 de imagem + 64.
    expect($section)
        ->toContain('lg:pl-[max(0px,calc((100%-1336px)/2))]!')
        ->and($section)
        ->toContain('lg:pr-16!')
        ->and($section)
        ->toContain('lg:max-w-none!')
        ->and($section)
        ->toContain('md:w-[34.4%]')
        ->and($section)
        ->toContain('max-w-[538px]')
        ->and($section)
        ->toContain('md:gap-x-8')
        ->and($section)
        ->not->toContain('md:gap-x-28');
});

it('keeps every metric card on the same baseline', function (): void {
    $response = $this->get('/');

    $response->assertOk();

    preg_match('/<section[^>]*id="por-que-firece".*?<\/section>/s', (string) $response->getContent(), $matches);

    expect($matches)->not->toBeEmpty();

    $section = $matches[0];

    // `first:pt-0`/`last:pb-0` são longhand e venciam o shorthand `p-4` mesmo dentro do
    // media query, deixando o primeiro card 16px acima dos outros. Ficam restritos ao
    // empilhamento (max-lg) para não vazarem no grid.
    expect(mb_substr_count($section, 'max-lg:py-6 max-lg:first:pt-0 max-lg:last:pb-0 lg:p-4'))
        ->toBe(3)
        ->and($section)
        ->not->toContain('first:pt-0 last:pb-0 md:p-4');

    // Os cards só viram 3 colunas quando a coluna de conteúdo é larga o bastante para
    // os títulos caberem em 2 linhas, como no Figma.
    expect($section)->toContain('lg:grid-cols-3')->not->toContain('md:grid-cols-3');
});

it('stacks the story cards on mobile and keeps the Figma 12px gutter from md up', function (): void {
    $response = $this->get('/');

    $response->assertOk();

    preg_match('/<div[^>]*grid-cols-1[^>]*md:grid-cols-3[^>]*>/', (string) $response->getContent(), $matches);

    expect($matches)->not->toBeEmpty();

    expect($matches[0])->toContain('gap-8')->toContain('md:gap-3');
});

it('renders the first step of the "processo" section styled like the others, on elevation-01dp', function (): void {
    $response = $this->get('/');

    $response->assertOk();

    preg_match('/<section[^>]*id="processo".*?Diagnóstico financeiro/s', (string) $response->getContent(), $matches);

    expect($matches)->not->toBeEmpty();

    $firstStep = $matches[0];

    expect($firstStep)
        ->toContain('bg-elevation-01dp')
        ->and($firstStep)
        ->not->toContain('linear-gradient')
        ->and($firstStep)
        ->not->toContain('text-text-light');
});

it('spaces the plan cards with the Figma 32px rhythm and full-width ctas', function (): void {
    $response = $this->get('/');

    $response->assertOk();

    preg_match('/<section[^>]*id="planos".*?<\/section>/s', (string) $response->getContent(), $matches);

    expect($matches)->not->toBeEmpty();

    $section = $matches[0];

    expect($section)
        ->toContain('flex flex-col gap-8 p-6 md:p-8')
        ->and($section)
        ->toContain('w-full!')
        ->and(mb_substr_count($section, 'size-6 shrink-0'))
        ->toBe(15);
});
