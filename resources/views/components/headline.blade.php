@props([
    'as' => 'section',
    // layout & behavior
    'align' => 'center',     // center|left
    'size'  => 'xl',         // sm|md|lg|xl
    'animate' => true,       // fade in
    'width' => 'default',    // default|narrow|wide|full
])

@php
    $Tag = $as;

    // container widths to match your snippet


    $alignCls = $align === 'left'
        ? 'lg:text-left text-left'
        : 'text-center lg:text-left';

    $animateCls = $animate ? 'animate-fade-in' : '';

    // heading & paragraph scales
    $sizes = [
        'sm' => ['h' => 'text-lg sm:text-xl md:text-2xl lg:text-3xl',
                 'p' => 'text-sm sm:text-base'],
        'md' => ['h' => 'text-xl sm:text-2xl md:text-3xl lg:text-4xl',
                 'p' => 'text-sm sm:text-base md:text-lg'],
        'lg' => ['h' => 'text-2xl sm:text-3xl md:text-4xl lg:text-5xl',
                 'p' => 'text-base md:text-lg lg:text-xl'],
        'xl' => ['h' => 'text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl',
                 'p' => 'text-sm sm:text-base md:text-lg lg:text-xl'],
    ][$size] ?? ['h' => 'text-2xl md:text-3xl', 'p' => 'text-base'];

@endphp

<{{ $Tag }} {{ $attributes->merge(['class' => "$animateCls  $alignCls "]) }}>
{{-- Badge (optional) --}}
@isset($badge)
    <div {{ $badge->attributes }}>
        {{ $badge }}
    </div>
@endisset


@isset($headline)
    <h1 {{ $headline->attributes->class("text-text-high font-bold drop-shadow-lg leading-tight mb-2 sm:mb-4") }}>
        {{ $headline }}
    </h1>
@endisset

{{-- Description --}}

@isset($description)
    <p {{ $description->attributes->class("text-text-high dark:text-text-medium font-medium animate-fade-in delay-200 max-w-full mb-4 sm:mb-6 $sizes[p] ".($align==='left'?'text-left':'text-center lg:text-left')) }}>
        {{ $description }}
    </p>
@endisset

{{-- Actions / CTA(s) --}}
@isset($actions)
    <div {{ $actions->attributes->class('flex flex-col sm:flex-row gap-3 sm:gap-x-4 items-center '.($align==='left'?'lg:items-start lg:justify-start justify-start':'justify-center lg:justify-start lg:items-start')) }}>
        {{ $actions }}
    </div>
@endisset
</{{ $Tag }}>
