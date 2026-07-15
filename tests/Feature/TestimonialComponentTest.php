<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Blade;

it('renderiza a variante default com nome, tempo e 5 estrelas', function (): void {
    $html = Blade::render(
        '<x-testimonial name="Felipe Rosa" time="1 mês atrás" avatar="https://example.com/a.png">Depoimento aqui.</x-testimonial>'
    );

    expect($html)
        ->toContain('Felipe Rosa')
        ->toContain('1 mês atrás')
        ->toContain('Depoimento aqui.')
        ->toContain('https://example.com/a.png');

    expect(mb_substr_count($html, 'text-yellow-primary'))->toBe(5);
});

it('renderiza a variante centered com avatar grande no topo', function (): void {
    $html = Blade::render(
        '<x-testimonial variant="centered" name="Paulo Lima" time="2 meses atrás" avatar="https://example.com/a.png">Depoimento.</x-testimonial>'
    );

    expect($html)
        ->toContain('Paulo Lima')
        ->toContain('2 meses atrás')
        ->toContain('size-20'); // avatar tamanho lg no topo

    expect(mb_substr_count($html, 'text-yellow-primary'))->toBe(5);
});

it('permite customizar a quantidade de estrelas', function (): void {
    $html = Blade::render('<x-testimonial name="Ana" rating="3">Texto.</x-testimonial>');

    expect(mb_substr_count($html, 'text-yellow-primary'))->toBe(3);
});

it('omite o tempo quando não informado', function (): void {
    $html = Blade::render('<x-testimonial name="Ana">Texto.</x-testimonial>');

    expect($html)->toContain('Ana');
});
