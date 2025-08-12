@props([
    'as' => 'div',
    'href' => null,
    'variant' => 'base',   // base|stat|service|callout
    'accent' => 'orange',  // tailwind color name for the icon pill
    'interactive' => false,
    'align' => 'left',     // left|center (used by service)
])

@php
    $tag = $href ? 'a' : $as;

    $surfaces = 'bg-elevation-01dp border border-outline-dark border-2 rounded-xl';
    $pad = match($variant)  {
        'stat' => 'p-8 flex flex-col gap-y-8 justify-between',
    };

    $interactiveCls = $interactive
        ? ' transition hover:border-outline-low hover:bg-elevation-02dp hover:shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-zinc-400/40 ring-offset-zinc-900'
        : '';

    $layout = [
        'base'    => 'space-y-3',
        'stat'    => 'space-y-2',
        'service' => ($align === 'center' ? 'text-center' : '') . ' space-y-4',
        'callout' => 'flex items-start gap-4',
    ][$variant] ?? 'space-y-3';

    $accentBg = match ($accent) {
        'orange' => 'bg-orange-600',
        'emerald'=> 'bg-emerald-600',
        'blue'   => 'bg-blue-600',
        'red'    => 'bg-red-600',
        default  => 'bg-orange-600',
    };

    $classes = trim("$surfaces $pad $layout $interactiveCls");
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => $classes])->when($href, fn($a)=>$a->merge(['href'=>$href])) }}>
{{-- Icon (small pill) --}}

@if($variant === 'stat')
    @isset($icon)
        <div {{ $icon->attributes->class("h-8 w-8 text-icon-high rounded-xl grid place-items-center shrink-0") }}>
            {{ $icon }}
        </div>
    @endisset


    {{-- Title --}}
    @isset($title)
        <h3 {{ $title->attributes->class('text-lg font-semibold tracking-tight') }}>
            {{ $title }}
        </h3>
    @endisset


    <div class="flex flex-col gap-y-2">
        {{-- Metric (for stat) --}}
        @isset($metric)
            <div {{ $metric->attributes->class('text-3xl text-text-high font-bold') }}>
                {{ $metric }}
            </div>
        @endisset

        {{-- Subtitle / helper --}}
        @isset($subtitle)
            <p {{ $subtitle->attributes->class('text-md  text-text-medium') }}>
                {{ $subtitle }}
            </p>
        @endisset
    </div>

@else

    @isset($icon)
        <div {{ $icon->attributes->class("h-8 w-8 text-icon-high rounded-xl grid place-items-center shrink-0") }}>
            {{ $icon }}
        </div>
    @endisset


    {{-- Title --}}
    @isset($title)
        <h3 {{ $title->attributes->class('text-lg font-semibold tracking-tight') }}>
            {{ $title }}
        </h3>
    @endisset

    {{-- Metric (for stat) --}}
    @isset($metric)
        <div {{ $metric->attributes->class('text-3xl text-text-high font-bold') }}>
            {{ $metric }}
        </div>
    @endisset

    {{-- Subtitle / helper --}}
    @isset($subtitle)
        <p {{ $subtitle->attributes->class('text-sm  text-text-medium') }}>
            {{ $subtitle }}
        </p>
    @endisset

    {{-- Body --}}
    <div>{{ $slot }}</div>

    {{-- Footer/actions --}}
    @isset($footer)
        <div {{ $footer->attributes->class('mt-4 pt-4 border-t border-zinc-800/80') }}>
            {{ $footer }}
        </div>
    @endisset

@endif
</{{ $tag }}>
