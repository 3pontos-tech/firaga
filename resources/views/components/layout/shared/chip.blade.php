@props([
    'variant' => '',
    'class' => '',
])

@php
    $variants = [
        'primary' => 'bg-brand-primary/40 hover:bg-brand-primary/90 text-white border border-brand-primary ',
        'metalic' => 'border border-white/30 text-white',
        'custom' => '',
    ];

    $variantClasses = $variants[$variant] ?? $variants['primary'];
    $baseClasses =
        'inline-flex items-center justify-center transition-all duration-200';
    $finalClasses = $baseClasses . ' ' . $variantClasses . ' ' . $class;
@endphp

<div class="font-bold flex items-center gap-2 sm:gap-2.5 lg:gap-[10px] w-fit rounded-full {{ $finalClasses }}">
    {{ $slot }}
</div>
