@props([
    'as' => 'div',
    'href' => null,
    'variant' => 'base',   // base|stat|cta|callout
    'accent' => 'orange',
    'interactive' => null, // null|'brand'|'default' (truthy to enable)
    'align' => 'left',
])

@php
    $tag = $href ? 'a' : $as;

    // Named group to avoid nested-group collisions
    $surfaces = 'bg-elevation-01dp border border-outline-dark border-2 rounded-xl group/card transition';

    $pad = match($variant)  {
        'stat' => 'p-8 flex flex-col gap-y-8 justify-between',
        'cta'  => 'p-6 flex flex-col gap-y-4 ' . ($align === 'center' ? 'items-center text-center' : ''),
        default => 'p-6 flex flex-col gap-y-4',
    };

    $interactiveBase = $interactiveIcon = $interactiveText = '';

    if ($interactive) {
        // Root (self hover)
        $interactiveBase = match($interactive) {
            'brand' => 'hover:border-brand-primary hover:bg-brand-primary hover:text-text-high hover:shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-primary ring-offset-zinc-900',
            default => 'hover:border-outline-low hover:bg-elevation-02dp hover:shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-zinc-400/40 ring-offset-zinc-900',
        };

        // Children (react to CARD hover)
        $interactiveIcon = match($interactive) {
            'brand' => 'group-hover/card:text-icon-high group-hover/card:bg-outline-light',
            default => 'group-hover/card:text-icon-low group-hover/card:bg-elevation-01dp',
        };

        $interactiveText = match($interactive) {
            'brand' => 'group-hover/card:text-text-high',
            default => '',
        };
    }

    $layout = [
        'base'    => 'space-y-3',
        'cta'     => 'space-y-2',
        'service' => ($align === 'center' ? 'text-center' : '') . ' space-y-4',
        'callout' => 'flex items-start gap-4',
    ][$variant] ?? 'space-y-3';

    $classes = trim("$surfaces $pad $layout $interactiveBase");
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => $classes])->when($href, fn($a)=>$a->merge(['href'=>$href])) }}>

@if($variant === 'stat')
    @isset($icon)
        <div {{ $icon->attributes->class("h-8 w-8 text-icon-high rounded-xl grid place-items-center shrink-0") }}>
            {{ $icon }}
        </div>
    @endisset

    @isset($title)
        <h3 {{ $title->attributes->class('text-lg font-semibold tracking-tight') }}>
            {{ $title }}
        </h3>
    @endisset

    <div class="flex flex-col gap-y-2">
        @isset($metric)
            <div {{ $metric->attributes->class('text-3xl text-text-high font-bold') }}>
                {{ $metric }}
            </div>
        @endisset

        @isset($subtitle)
            <p {{ $subtitle->attributes->class('text-md text-text-medium') }}>
                {{ $subtitle }}
            </p>
        @endisset
    </div>

@elseif($variant === 'cta')

    @isset($icon)
        <div {{ $icon->attributes->class("h-8 w-8 text-icon-high rounded-xl grid place-items-center shrink-0 $interactiveIcon") }}>
            {{ $icon }}
        </div>
    @endisset

    @isset($title)
        <h3 {{ $title->attributes->class("text-xl font-bold tracking-tight $interactiveText") }}>
            {{ $title }}
        </h3>
    @endisset

    @isset($subtitle)
        <p {{ $subtitle->attributes->class("text-sm text-text-medium $interactiveText") }}>
            {{ $subtitle }}
        </p>
    @endisset

    <div>{{ $slot }}</div>

    @isset($footer)
        {{-- show CTA only when card hovered, if interactive --}}
        <div {{ $footer->attributes->class($interactive ? 'hidden lg:block lg:opacity-0 lg:group-hover/card:opacity-100 w-full' : 'w-full') }}>
            {{ $footer }}
        </div>
    @endisset

@else
    @isset($icon)
        <div {{ $icon->attributes->class("h-8 w-8 text-icon-high rounded-xl grid place-items-center shrink-0 $interactiveIcon") }}>
            {{ $icon }}
        </div>
    @endisset

    @isset($title)
        <h3 {{ $title->attributes->class('text-lg font-semibold tracking-tight') }}>
            {{ $title }}
        </h3>
    @endisset

    @isset($metric)
        <div {{ $metric->attributes->class('text-3xl text-text-high font-bold') }}>
            {{ $metric }}
        </div>
    @endisset

    @isset($subtitle)
        <p {{ $subtitle->attributes->class('text-sm text-text-medium') }}>
            {{ $subtitle }}
        </p>
    @endisset

    <div>{{ $slot }}</div>

    @isset($footer)
        <div {{ $footer->attributes->class('mt-4 pt-4 border-t border-zinc-800/80') }}>
            {{ $footer }}
        </div>
    @endisset
@endif
</{{ $tag }}>
