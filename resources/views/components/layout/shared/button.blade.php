@props([
    'href' => '#',
    'variant' => '',
    'class' => '',
])

@php
    $variants = [
        'primary' => 'bg-brand-primary hover:bg-brand-primary/90 text-white',
        'secondary' => 'bg-icon-light hover:bg-brand-secondary/90 text-brand-primary',
        'outlined' => 'bg-transparent border border-outline-light dark:border-outline-low hover:bg-brand-primary/10',
        'metalic' => 'bg-gradient-to-r from-[#D6D6D6] via-[#FFFFFF] to-[#D6D6D6]',
        'custom' => '',
    ];

    $variantClasses = $variants[$variant] ?? $variants['primary'];
    $baseClasses =
        'inline-flex items-center justify-center rounded-lg transition-all duration-200';
    $finalClasses = $baseClasses . ' ' . $variantClasses . ' ' . $class;
@endphp

<a href="{{ $href }}" class="{{ $finalClasses }}">
    {{ $slot }}
</a>
