@props([
    'href' => '#',
    'variant' => 'filled',
    'class' => '',
])

@php
    $variants = [
        'primary' => 'bg-brand-primary hover:bg-brand-primary/90 text-white',
        'secondary' => 'bg-icon-light hover:bg-brand-secondary/90 text-brand-primary',
        'outline' => 'bg-transparent border border-outline-light dark:border-outline-dark hover:bg-brand-primary/10',
    ];

    $variantClasses = $variants[$variant] ?? $variants['filled'];
    $baseClasses =
        'inline-flex items-center justify-center  rounded-lg font-medium transition-all duration-200';
    $finalClasses = $baseClasses . ' ' . $variantClasses . ' ' . $class;
@endphp

<a href="{{ $href }}" class="{{ $finalClasses }}">
    {{ $slot }}
</a>
