@props([
    'as' => 'div',
    'href' => null,
    'variant' => 'base',   // base|stat|cta|callout|service
    'accent' => 'orange',
    'interactive' => null, // bool|null|'brand'|'default' (legacy)
    'emphasis' => null,    // null|'default'|'primary' (aplica quando interactive)
    'align' => 'left',
    'disabled' => false,
    'density' => 'normal', // 'normal'|'compact'
    'elevation' => 1,      // 0|1|2
    'borderStrength' => 2, // 1|2
    'target' => null,
    'rel' => null,
])

@php
    // Normalização de interatividade legacy → emphasis
    $normalizedEmphasis = $emphasis;
    if (is_string($interactive)) {
        $value = strtolower((string) $interactive);
        if ($value === 'brand') {
            $normalizedEmphasis = $normalizedEmphasis ?? 'primary';
            $interactive = true;
        } elseif ($value === 'default') {
            $normalizedEmphasis = $normalizedEmphasis ?? 'default';
            $interactive = true;
        } else {
            $interactive = (bool) $interactive;
        }
    }

    $isInteractive = (bool) $interactive && !$disabled;
    $tag = $href ? 'a' : $as;

    // Surfaces (elevation + border)
    $elevationClass = match((int) $elevation) {
        0 => 'bg-elevation-00dp',
        2 => 'bg-elevation-02dp',
        default => 'bg-elevation-01dp',
    };
    $borderClass = 'border border-outline-dark' . ((int) $borderStrength === 2 ? ' border-2' : '');
    $surfaces = trim($elevationClass . ' ' . $borderClass . ' rounded-xl transition');

    // Padding / spacing por variant + density
    $padBase = match($variant)  {
        'stat' => 'p-8 flex flex-col gap-y-8 justify-between',
        'cta'  => 'p-6 flex flex-col gap-y-4 ' . ($align === 'center' ? 'items-center text-center' : ''),
        default => 'p-6 flex flex-col gap-y-4',
    };
    if ($density === 'compact') {
        $padBase = str_replace(['p-8', 'p-6'], ['p-6', 'p-4'], $padBase);
    }

    // Interatividade (root/children) somente quando $isInteractive
    $interactiveBase = $interactiveIcon = $interactiveText = '';
    if ($isInteractive) {
        $style = $normalizedEmphasis ?? 'default';
        // Root (self hover + focus-visible)
        $interactiveBase = match($style) {
            'primary' => 'hover:border-brand-primary hover:bg-brand-primary hover:text-text-high hover:shadow-md focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-brand-primary ring-offset-zinc-900',
            default   => 'hover:border-outline-low hover:bg-elevation-02dp hover:shadow-md focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-zinc-400/40 ring-offset-zinc-900',
        };
        // Children (reagem ao hover do CARD)
        $interactiveIcon = match($style) {
            'primary' => 'group-hover/card:text-icon-high',
            default   => 'group-hover/card:text-icon-low group-hover/card:bg-elevation-01dp',
        };
        $interactiveText = match($style) {
            'primary' => 'group-hover/card:text-text-high',
            default   => '',
        };
    }

    // Layout por variant
    $layout = [
        'base'    => 'space-y-3',
        'cta'     => 'space-y-2',
        'service' => ($align === 'center' ? 'text-center' : '') . ' space-y-4',
        'callout' => 'flex items-start gap-4',
    ][$variant] ?? 'space-y-3';

    // Classes por slot (centralizadas)
    $iconClass = trim('h-8 w-8 text-icon-high rounded-xl grid place-items-center shrink-0 ' . ($isInteractive ? $interactiveIcon : ''));

    $alignText = $align === 'center' ? ' text-center' : '';

    $titleBase = match($variant) {
        'cta'  => 'text-xl font-bold tracking-tight',
        default => 'text-lg font-semibold tracking-tight',
    };
    $titleClass = trim($titleBase . $alignText . ' ' . ($isInteractive ? $interactiveText : ''));

    $subtitleBase = match($variant) {
        'stat' => 'text-md text-text-medium',
        default => 'text-sm text-text-medium',
    };
    $subtitleClass = trim($subtitleBase . $alignText . ' ' . ($isInteractive ? $interactiveText : ''));

    $metricClass = trim('text-3xl text-text-high font-bold' . $alignText);

    // Disabled visuals
    $disabledClasses = $disabled ? ' pointer-events-none cursor-not-allowed opacity-60' : '';

    $classes = trim("$surfaces $padBase $layout $interactiveBase$disabledClasses");

    // Link / Atributos extras
    $linkAttrs = [];
    if ($href) {
        $linkAttrs['href'] = $href;
        if ($target) {
            $linkAttrs['target'] = $target;
            if ($target === '_blank' && !$rel) {
                $linkAttrs['rel'] = 'noopener noreferrer';
            }
        }
        if ($rel) {
            $linkAttrs['rel'] = $rel;
        }
    }
    if ($disabled) {
        $linkAttrs['aria-disabled'] = 'true';
        $linkAttrs['tabindex'] = '-1';
    }
@endphp

<div class="{{ $isInteractive ? 'group/card' : '' }}">
<{{ $tag }} {{ $attributes->merge(['class' => $classes])->merge($linkAttrs) }}>

@if($variant === 'stat')
    @isset($icon)
        <div {{ $icon->attributes->class($iconClass) }}>
            {{ $icon }}
        </div>
    @endisset

    @isset($title)
        <h3 {{ $title->attributes->class($titleClass) }}>
            {{ $title }}
        </h3>
    @endisset

    <div class="flex flex-col gap-y-2">
        @isset($metric)
            <div {{ $metric->attributes->class($metricClass) }}>
                {{ $metric }}
            </div>
        @endisset

        @isset($subtitle)
            <p {{ $subtitle->attributes->class($subtitleClass) }}>
                {{ $subtitle }}
            </p>
        @endisset
    </div>

@elseif($variant === 'cta')

    @isset($icon)
        <div {{ $icon->attributes->class($iconClass) }}>
            {{ $icon }}
        </div>
    @endisset

    @isset($title)
        <h3 {{ $title->attributes->class($titleClass) }}>
            {{ $title }}
        </h3>
    @endisset

    @isset($subtitle)
        <p {{ $subtitle->attributes->class($subtitleClass) }}>
            {{ $subtitle }}
        </p>
    @endisset

    <div>{{ $slot }}</div>

    @isset($footer)
        {{-- show CTA only when card hovered, if interactive --}}
        <div {{ $footer->attributes->class($isInteractive ? 'hidden lg:block lg:opacity-0 lg:group-hover/card:opacity-100 w-full' : 'w-full') }}>
            {{ $footer }}
        </div>
    @endisset

@else
    @isset($icon)
        <div {{ $icon->attributes->class($iconClass) }}>
            {{ $icon }}
        </div>
    @endisset

    @isset($title)
        <h3 {{ $title->attributes->class($titleClass) }}>
            {{ $title }}
        </h3>
    @endisset

    @isset($metric)
        <div {{ $metric->attributes->class($metricClass) }}>
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
</div>
