@props([
    'variant' => '',
    'class' => '',
])

@php
    $variants = [
        'primary' => 'bg-brand-primary hover:bg-brand-primary/90 text-white ',
        'metalic' => 'border border-white bg-white/20 text-white'
    ];

    $variantClasses = $variants[$variant] ?? $variants['primary'];
    $baseClasses =
        'inline-flex items-center justify-center transition-all duration-200';
    $finalClasses = $baseClasses . ' ' . $variantClasses . ' ' . $class;
@endphp

<div class="px-4 py-2 border border-brand-primary  text-text-high font-bold flex items-center gap-[10px] w-fit rounded-full {{ $finalClasses }}">
    {{ $slot }}
</div>
