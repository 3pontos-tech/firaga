@php use App\Filament\Components\DTOs\ButtonComponent; @endphp
@props([
    'as' => 'button',
    'href' => null,
    'type' => 'button',
    'variant',   // brand|secondary|outline|ghost|link|danger
    'size' => 'md',         // xs|sm|md|lg
    'rounded' => 'full',
    'block' => false,
    'disabled' => false,
    'loading' => false,
    'iconOnly' => false,
    'component',
    'icon' => null,
    'iconPosition' => 'leading'
])

{{-- pick up the card's interactive flag if present --}}
@aware([
    'interactive' => null,
    'variant' => 'brand', // default variant for buttons
    'component'
])

@php

    if($component && !$component instanceof ButtonComponent) {
        throw new \Exception("Component must be an instance of ButtonComponent");
    }

    if(isset($component)) {
        /** @var \App\Filament\Components\DTOs\ButtonComponent $component */
        $label = $component->label;
        $href = $component->url;
        $targetType = $component->target;
        $icon = $component->icon;
        $iconPosition = $component->iconPosition;
    }

    $isLink = filled($href);
    $tag = $isLink ? 'a' : $as;
    $isBusy = (bool) $loading;
    $isDisabled = (bool) $disabled || $isBusy;

    // base: note 'relative' for spinner positioning; use a *different* named group for the button itself
    $base = 'relative inline-flex items-center justify-center font-medium transition-all duration-200 border focus:outline-none focus:ring-2 focus:ring-offset-2 group/button';

    $round = [
        'full' => 'rounded-full', 'lg' => 'rounded-xl', 'md' => 'rounded-lg', 'sm' => 'rounded-md',
    ][$rounded] ?? 'rounded-sm';

    $sizes = [
        'xs' => ['pad'=>'px-2.5 py-1.5','text'=>'text-xs','icon'=>'h-4 w-4','iconOnly'=>'p-1.5'],
        'sm' => ['pad'=>'px-3.5 py-2','text'=>'text-sm','icon'=>'h-4.5 w-4.5','iconOnly'=>'p-2'],
        'md' => ['pad'=>'px-4 py-2.5','text'=>'text-sm','icon'=>'h-5 w-5','iconOnly'=>'p-2.5'],
        'lg' => ['pad'=>'px-5 py-3','text'=>'text-base','icon'=>'h-5 w-5','iconOnly'=>'p-3'],
    ][$size] ?? ['pad'=>'px-4 py-2.5','text'=>'text-sm','icon'=>'h-5 w-5','iconOnly'=>'p-2.5'];

    $variants = [
        // self-hover styles
        'brand'     => 'bg-brand-primary text-brand-accent border-brand-primary hover:bg-brand-primary/90 hover:shadow-md focus:ring-brand-primary',
        'secondary' => 'bg-white text-brand-primary border-none focus:border-1 hover:bg-gray-50 hover:text-brand-primary/90 focus:ring-brand-primary',
        'outline'   => 'bg-transparent text-text-high border-outline-low hover:bg-elevation-02dp focus:ring-zinc-400/40',
        'white'    => 'bg-white text-text-high border-outline-low hover:bg-elevation-02dp focus:ring-zinc-400/40',
    ];

    $w = $block ? 'w-full' : 'w-auto';
    $disabledCls = $isDisabled ? 'opacity-60 pointer-events-none' : '';
    $hasIcon = filled($icon);
    $hasLeading = isset($leading) || ($hasIcon && $iconPosition === 'leading');
    $hasTrailing = isset($trailing) || ($hasIcon && $iconPosition === 'trailing');
    $gap = ($hasLeading || $hasTrailing) ? 'gap-2' : 'gap-0';
    $pad = $iconOnly ? $sizes['iconOnly'] : $sizes['pad'];

    // linked hover: react to CARD hover if the ancestor card is interactive
    $linked = '';
    if ($interactive) {
        $linked = match ($variant) {
            'brand'     => 'group-hover/card:shadow-md ', // brand already turns the card brand; we just add a subtle lift
            'secondary' => 'group-hover/card:bg-white group-hover/card:text-brand-primary group-hover/card:border-none',
            'outline'   => 'group-hover/card:bg-elevation-02dp group-hover/card:border-outline-low',
            default     => '',
        };
    }

    $classes = implode(' ', [
        $base, $round, $w, $gap, $sizes['text'], $variants[$variant] ?? $variants['brand'], $pad, $disabledCls, $linked,
    ]);
@endphp

<{{ $tag }}
    @unless($isLink) type="{{ $type }}" @endunless
    {{ $attributes->class($classes) }}
@if($isLink)
    @isset($targetType) target="{{ $targetType }}" @endisset
    href="{{ $href }}" @if($isDisabled)
        aria-disabled="true" tabindex="-1"
    @endif
@else
    @if($isDisabled)
        disabled
    @endif
@endif
@if($isBusy)
    aria-busy="true"
@endif
>


<span class="inline-flex items-center justify-center {{ $gap }}">

        @isset($label)
        <span {{ $attributes->merge(['class' =>' shrink-0 transition-colors group-hover/button:opacity-90']) }} >
                {{ $label }}
            </span>
    @endisset

    {{-- Leading icon --}}
    @if ($hasIcon && $iconPosition === 'leading')
        <span class="{{ $sizes['icon'] }} shrink-0 transition-colors group-hover/button:opacity-90">
                <x-dynamic-component :component="$icon" class="w-full h-full" />
            </span>
    @elseif (isset($leading))
        <span {{ $leading->attributes->class($sizes['icon'].' shrink-0 transition-colors group-hover/button:opacity-90') }}>
                {{ $leading }}
            </span>
    @endif

    {{-- Label --}}
    @unless($iconOnly)
        <span class="{{ $isBusy ? 'opacity-0' : 'opacity-100' }}">
                {{ $slot }}
            </span>
    @endunless

    {{-- Trailing icon --}}
    @if ($hasIcon && $iconPosition === 'trailing')
        <span class="{{ $sizes['icon'] }} shrink-0 transition-transform">
                <x-dynamic-component :component="$icon" class="w-full h-full" />
            </span>
    @elseif (isset($trailing))
        <span {{ $trailing->attributes->class($sizes['icon'].' shrink-0 transition-transform') }}>
                {{ $trailing }}
            </span>
    @endif

    </span>

{{-- Loading spinner --}}
@if($isBusy)
    <span class="absolute inline-flex">
            <svg class="animate-spin {{ $sizes['icon'] }}" viewBox="0 0 24 24" aria-hidden="true">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                <path class="opacity-75" d="M4 12a8 8 0 018-8" stroke="currentColor" stroke-width="4"
                      stroke-linecap="round"/>
            </svg>
        </span>
@endif
</{{ $tag }}>
