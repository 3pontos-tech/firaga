@php use App\Filament\Components\DTOs\BadgeComponent; @endphp
@props([
    'as' => 'div', // div|span|a|button
    'variant' => 'brand', // brand|neutral|custom
    'size' => 'md', // sm|md|lg
    'rounded' => 'full',
    'component'
])

@php

    if(isset($component) && !$component instanceof BadgeComponent) {
        throw new \Exception("Badge must be an instance of BadgeComponent");
    }

    if(isset($component)) {
        $componentIcon = $component->icon ?? null;
    }

    $tag = $as;

    $base = 'font-semibold flex items-center w-fit mb-8 rounded-' . $rounded . ' inline-flex justify-center transition-all duration-200 border';

    // Sizes
    $sizes = [
        'sm' => 'gap-1.5 px-3 py-1.5 text-xs',
        'md' => 'gap-2 sm:gap-2.5 lg:gap-[10px] px-4 py-2 text-sm md:text-md',
        'lg' => 'gap-3 px-5 py-3 text-base',
    ];

    // Variants
    $variants = [
        'brand'   => 'bg-brand-primary/10 hover:bg-brand-primary/90 text-white border-brand-primary/30',
        'neutral' => 'bg-zinc-200 hover:bg-zinc-300 text-zinc-800 border-zinc-300',
        'custom'  => '', // allow full custom via $attributes->merge()
    ];

    $classes = "$base " . ($sizes[$size] ?? $sizes['md']) . ' ' . ($variants[$variant] ?? $variants['brand']);
@endphp
<div class="w-full">
<{{ $tag }} {{ $attributes->merge(['class' => $classes]) }}>


@isset($component)
    <x-filament::icon :icon="$componentIcon" class="h-5 w-5 text-icon-high shrink-0" />
@endisset

@isset($icon)
    <span {{ $icon->attributes->class('shrink-0') }}>
            {{ $icon }}
        </span>
@endisset


{{ $component->label ?? $slot }}

</{{ $tag }}>
</div>
