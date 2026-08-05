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

it('renders the corner brackets anchored to the arrow image container edges', function (): void {
    $response = $this->get('/');

    $response->assertOk();

    preg_match('/<div[^>]*aspect-422\/569[^>]*>.*?<\/div>/s', (string) $response->getContent(), $matches);

    expect($matches)->not->toBeEmpty();

    $imageContainer = $matches[0];

    expect($imageContainer)
        ->toContain('images/arrow.webp')
        ->and($imageContainer)
        ->toContain('absolute inset-0')
        ->and($imageContainer)
        ->toContain('top-0 left-0')
        ->and($imageContainer)
        ->toContain('right-0 bottom-0');
});

it('does not rotate the arrow image on mobile', function (): void {
    $response = $this->get('/');

    $response->assertOk();

    preg_match('/<img[^>]*images\/arrow\.webp[^>]*>/', (string) $response->getContent(), $matches);

    expect($matches)->not->toBeEmpty();

    $image = $matches[0];

    expect($image)
        ->not->toContain('rotate-90')
        ->and($image)
        ->not->toContain('translate')
        ->and($image)
        ->toContain('h-full w-full object-contain md:object-cover');
});

it('caps the arrow image height at 290px on mobile only', function (): void {
    $response = $this->get('/');

    $response->assertOk();

    preg_match('/<div[^>]*aspect-422\/569[^>]*>/', (string) $response->getContent(), $matches);

    expect($matches)->not->toBeEmpty();

    expect($matches[0])->toContain('max-h-[290px]')->toContain('md:max-h-none');
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
