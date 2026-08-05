<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Blade;

it('renders each bracket with only two borders, never a full box', function (): void {
    $html = Blade::render('<x-corner-brackets />');

    expect($html)
        ->toContain('rounded-tl-lg')
        ->and($html)
        ->toContain('border-t-[6px]')
        ->and($html)
        ->toContain('border-l-[6px]')
        ->and($html)
        ->toContain('rounded-br-lg')
        ->and($html)
        ->toContain('border-r-[6px]')
        ->and($html)
        ->toContain('border-b-[6px]');

    // O shorthand fecharia os 4 lados, sobrescrevendo os lados zerados no CSS do Tailwind.
    expect($html)
        ->not->toMatch('/class="[^"]*\bborder-\[\d+px\]/')
        ->and($html)
        ->not->toMatch('/class="[^"]*\bborder-\d/');
});

it('renders brackets slightly wider than tall by default', function (): void {
    $html = Blade::render('<x-corner-brackets />');

    expect($html)->toContain('h-16 w-18')->and($html)->toContain('md:h-24 md:w-26');
});

it('anchors the brackets to opposite corners of the parent container', function (): void {
    $html = Blade::render('<x-corner-brackets />');

    expect($html)
        ->toContain('absolute inset-0')
        ->and($html)
        ->toContain('absolute top-0 left-0')
        ->and($html)
        ->toContain('absolute right-0 bottom-0')
        ->and($html)
        ->toContain('pointer-events-none')
        ->and($html)
        ->toContain('aria-hidden="true"');
});

it('allows overriding size and color', function (): void {
    $html = Blade::render('<x-corner-brackets size="h-20 w-24" color="border-text-high" />');

    expect($html)
        ->toContain('h-20 w-24')
        ->and($html)
        ->toContain('border-text-high')
        ->and($html)
        ->not->toContain('border-brand-primary');
});
