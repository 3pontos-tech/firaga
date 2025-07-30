@props([
    'href' => '#',
    'variant' => '',
    'class' => '',
    'tag' => 'a',
])


@php

    $variant = match($variant){
        'secondary' => 'bg-icon-light hover:bg-brand-secondary/90 text-brand-primary',
        'outlined' => 'bg-transparent border border-outline-light dark:border-outline-low hover:bg-brand-primary/10',
        'metallic' => 'bg-gradient-to-r from-[#D6D6D6] via-[#FFFFFF] to-[#D6D6D6]',
        'custom' => '',
        default => 'bg-brand-primary hover:bg-brand-primary/90 text-white',
    };
    $baseClasses =
        'inline-flex items-center justify-center rounded-lg transition-all duration-200';
    $finalClasses = $baseClasses . ' ' . $variant . ' ' . $class;
@endphp

@if($tag === 'button')
    <button type="submit" class="{{ $finalClasses }}">
        {{ $slot }}
    </button>
@else
    <a href="{{ $href }}" class="{{ $finalClasses }}">
        {{ $slot }}
    </a>
@endif
