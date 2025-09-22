@php
    use App\Filament\Components\DTOs\BadgeComponent;use App\Filament\Components\DTOs\HeadlineComponent;
@endphp
@props([
    'as' => 'div',
    // layout & behavior
    'align' => 'center',     // center|left
    'size'  => 'xl',         // sm|md|lg|xl
    'animate' => true,       // fade in
    'width' => 'default',    // default|narrow|wide|full
    'component',   // for internal use only
])
@php
    if(isset($component) && !$component instanceof HeadlineComponent) {
        throw new \Exception("Component must be an instance of HeadlineComponent");
    }
    /** @var HeadlineComponent $component */

    if($component) {
        /** @var BadgeComponent $badge */
        $badgeComponent = $component->badge;
        $componentDescription = $component->description ?? null;

        $componentActions = $component->actions->isNotEmpty()
            ? $component->actions
            : null;

        $align = $component->position;
        $size = $component->size;
    }


    $tag = $as;

    $alignCls = match($align) {
        'left' => 'lg:text-left text-center flex flex-col items-start',
        'center' => 'text-center lg:text-center flex flex-col items-center',
        default => 'text-center lg:text-left flex flex-col items-center',
    };

    $animateCls = $animate ? 'animate-fade-in' : '';

    // heading & paragraph scales
    $sizes = [
        'sm' => [
            'h' => 'text-lg sm:text-xl md:text-2xl lg:text-3xl',
            'p' => 'text-sm sm:text-base'
        ],
        'md' => [
            'h' => 'text-xl sm:text-2xl md:text-3xl lg:text-4xl',
            'p' => 'text-sm sm:text-base md:text-lg'
        ],
        'lg' => [
            'h' => 'text-2xl sm:text-3xl md:text-4xl lg:text-5xl',
            'p' => 'text-base md:text-lg lg:text-xl'
        ],
        'xl' => [
            'h' => 'text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl',
            'p' => 'text-sm sm:text-base md:text-lg lg:text-xl'
        ],
        '2xl' => [
            'h' => 'text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl',
            'p' => 'text-base md:text-lg lg:text-xl xl:text-2xl'
        ],
        '3xl' => [
            'h' => 'text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl',
            'p' => 'text-lg md:text-xl lg:text-2xl xl:text-3xl'
        ],
        '4xl' => [
            'h' => 'text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl',
            'p' => 'text-xl md:text-2xl lg:text-3xl xl:text-4xl'
        ],

    ][$size] ?? ['h' => 'text-2xl md:text-3xl', 'p' => 'text-base'];

@endphp

<div class="{{ $component->position == 'center' ? 'mx-auto' : '' }}  max-w-2xl md:max-w-3xl lg:max-w-4xl">

    <{{ $tag }} {{ $attributes->merge(['class' => "$animateCls  $alignCls "]) }}>

    @isset($badge)
        <div {{ $badge->attributes }}>
            {{ $badge }}
        </div>
    @endisset

    @if(isset($badgeComponent) && $badgeComponent->hasBadge)
        <x-badge :component="$badgeComponent" />
    @endif


    @isset($headline)

        <h1 {{ $headline->attributes->class("text-text-high font-bold drop-shadow-lg leading-tight mb-2 sm:mb-4 ") }}>
            {{ $component->headline ?? $headline }}
        </h1>
    @endisset

    @if($component->heading)
        <h1 {{ $attributes->merge(['class' => "text-text-high text-2xl font-bold drop-shadow-lg tracking-wide mb-2 sm:mb-4 " . $sizes['h']]) }}>

            @php
                $headline = str($component->heading)->explode(' ');
            @endphp
            @foreach($headline as $word)
                @if(in_array($word, $component->keywords))
                    <span class="text-brand-primary">{{ $word }}</span>
                @else
                    {{ $word }}
                @endif
                @if(!$loop->last)
                    {{-- Add space between words except after the last one --}}
                    {{ ' ' }}
                @endif
            @endforeach
        </h1>
    @endisset

    {{-- Description --}}


    @isset($description)
        <p {{ $description->attributes->class("text-text-high dark:text-text-medium font-medium animate-fade-in delay-200 max-w-full mb-4 sm:mb-6 " . $sizes['p']) }}>
            {{ $description }}
        </p>
    @endisset

    @if($componentDescription)
        <p {{ $attributes->merge(['class' => "text-text-high dark:text-text-medium font-medium animate-fade-in delay-200 max-w-full mb-4 sm:mb-6 " . $sizes['p']]) }}>
            {{ $componentDescription }}
        </p>
    @endisset

    {{-- Actions / CTA(s) --}}
    @isset($actions)
        @php

        $actionsAlign = match($align) {
            'left' => 'lg:items-start lg:justify-start md:justify-center justify-center',
            'center' => 'justify-center',
            default => 'justify-center lg:justify-right lg:items-start',
        };

        @endphp

        <div {{ $actions->attributes->class('flex w-full flex-col sm:flex-row gap-3 sm:gap-x-4 items-center ' . $actionsAlign) }}>
            {{ $actions }}
        </div>
    @endisset


</{{ $tag }}>

</div>
