@props([
    'variant' => '',
    'class' => '',
])

@php
    $variant = match($variant) {
        'metallic' => 'border border-white/30 text-white',
        'custom' => '',
        default => 'bg-brand-primary/40 hover:bg-brand-primary/90 text-white border border-brand-primary',
    };


    $baseClasses = 'inline-flex items-center justify-center transition-all duration-200';
    $finalClasses = $baseClasses . ' ' . $variant . ' ' . $class;
@endphp

<div class="font-bold flex items-center gap-2 sm:gap-2.5 lg:gap-[10px] w-fit rounded-full {{ $finalClasses }}">
    {{ $slot }}
</div>
