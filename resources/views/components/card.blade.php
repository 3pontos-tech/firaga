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
    'card' => null, // DTO opcional para auto popular slots (App\Filament\Components\DTOs\CardComponent)
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
        'callout' => 'py-6 md:p-6 flex flex-col gap-y-2',
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
        'callout' => 'flex items-center  flex-col md:flex-row lg:flex-col  lg:gap-2',
    ][$variant] ?? 'space-y-3';

    // Classes por slot (centralizadas)
    $iconClass = match($variant) {
        'callout' => trim('w-16 h-16 lg:w-20 lg:h-20 rounded-xl grid place-items-center shrink-0 bg-brand-primary text-white transition-colors duration-200 group-hover/card:bg-white ' . ($isInteractive ? ' group-hover/card:text-brand-primary' : '')),
        default => trim('h-8 w-8 text-icon-high rounded-xl grid place-items-center shrink-0 ' . ($isInteractive ? $interactiveIcon : '')),
    };

    $alignText = $align === 'center' ? ' text-center' : '';

    $alignText = match($variant) {
        'callout' => [
            'left' => 'text-left',
            'center' => 'md:text-left lg:text-center',
        ],
        default => $alignText,
    };

    $titleBase = match($variant) {
        'cta'  => 'text-xl font-bold tracking-tight',
        'callout' => 'text-lg font-semibold md:text-left tracking-tight lg:text-center',
        default => 'text-lg font-semibold tracking-tight',
    };
    $titleClass = trim($titleBase . $alignText[$align] . ' ' . ($isInteractive ? $interactiveText : ''));

    $subtitleBase = match($variant) {
        'stat' => 'text-md text-text-medium',
        'callout' => 'text-sm text-text-medium md:text-left lg:text-center',
        default => 'text-sm text-text-medium',
    };
    $subtitleClass = trim($subtitleBase . $alignText[$align] . ' ' . ($isInteractive ? $interactiveText : ''));

    $metricClass = trim('text-3xl text-text-high font-bold' . $alignText[$align]);

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
        @else
            @if($card && $card->icon)
                <div class="{{ $iconClass }}">
                    <x-filament::icon :icon="$card->icon" class="w-9 h-9 lg:h-11 lg:w-11"/>
                </div>
            @endif
        @endisset

        @isset($title)
            <h3 {{ $title->attributes->class($titleClass) }}>
                {{ $title }}
            </h3>
        @else
            @if($card && $card->title)
                <h3 class="{{ $titleClass }}">{{ $card->title }}</h3>
            @endif
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
            @else
                @if($card && $card->description)
                    <p class="{{ $subtitleClass }}">{{ $card->description }}</p>
                @endif
            @endisset
        </div>

    @endif

    @if($variant === 'cta')

        @isset($icon)
            <div {{ $icon->attributes->class($iconClass) }}>
                {{ $icon }}
            </div>
        @else
            @if($card && $card->icon)
                <div class="{{ $iconClass }}">
                    <x-filament::icon :icon="$card->icon" class="w-9 h-9 lg:h-11 lg:w-11"/>
                </div>
            @endif
        @endisset

        @isset($title)
            <h3 {{ $title->attributes->class($titleClass) }}>
                {{ $title }}
            </h3>
        @else
            @if($card && $card->title)
                <h3 class="{{ $titleClass }}">{{ $card->title }}</h3>
            @endif
        @endisset

        @isset($subtitle)
            <p {{ $subtitle->attributes->class($subtitleClass) }}>
                {{ $subtitle }}
            </p>
        @else
            @if($card && $card->description)
                <p class="{{ $subtitleClass }}">{{ $card->description }}</p>
            @endif
        @endisset

        <div>{{ $slot }}</div>

        @isset($footer)
            {{-- show CTA only when card hovered, if interactive --}}
            <div {{ $footer->attributes->class($isInteractive ? 'hidden lg:block lg:opacity-0 lg:group-hover/card:opacity-100 w-full' : 'w-full') }}>
                {{ $footer }}
            </div>
        @endisset
    @endif

    @if($variant === 'callout')
        @isset($icon)
            <div {{ $icon->attributes->class($iconClass) }}>
                {{ $icon }}
            </div>
        @else
            @if($card && $card->icon)
                <div class="{{ $iconClass }}">
                    <x-filament::icon :icon="$card->icon" class="w-9 h-9 lg:h-11 lg:w-11"/>
                </div>
            @endif
        @endisset

        <div class="px-4 space-y-2">
            @isset($title)
                <h3 {{ $title->attributes->class($titleClass) }}>
                    {{ $title }}
                </h3>
            @else
                @if($card && $card->title)
                    <h3 class="{{ $titleClass }}">{{ $card->title }}</h3>
                @endif
            @endisset


            @isset($subtitle)
                <p {{ $subtitle->attributes->class('text-sm text-text-medium') }}>
                    {{ $subtitle }}
                </p>
            @else
                @if($card && $card->description)
                    <p class="{{ $subtitleClass }}  {{ $isInteractive ? 'group-hover/card:text-text-light' : '' }} ">{{ $card->description }}</p>
                @endif
            @endisset
        </div>

        <div>{{ $slot }}</div>

        @isset($footer)
            <div {{ $footer->attributes->class('mt-4 pt-4 border-t border-zinc-800/80') }}>
                {{ $footer }}
            </div>
        @endisset
    @endif
</{{ $tag }}>
</div>
