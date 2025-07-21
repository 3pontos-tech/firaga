@props([
    'variant' => '',
    'class' => '',
])

@php
    $variants = [
        'primary' => 'bg-brand-primary/40 hover:bg-brand-primary/90 text-white ',
        'metalic' => 'border border-white/30  text-white'
    ];

    $variantClasses = $variants[$variant] ?? $variants['primary'];
    $baseClasses =
        'inline-flex items-center justify-center transition-all duration-200';
    $finalClasses = $baseClasses . ' ' . $variantClasses . ' ' . $class;
@endphp

<div class="px-2 sm:px-3 lg:px-4 py-1 sm:py-1.5 lg:py-2 border border-brand-primary text-text-high font-bold flex items-center gap-2 sm:gap-2.5 lg:gap-[10px] w-fit rounded-full text-xs sm:text-sm lg:text-base {{ $finalClasses }}">
    {{ $slot }}
</div>
