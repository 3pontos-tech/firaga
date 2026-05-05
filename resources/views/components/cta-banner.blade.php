@props ([
    'variant' => 'primary',
    'ctaLabel',
    'ctaHref' => null,
    'footer' => null
])

@php
    $isPrimary = $variant === 'primary';
    $sectionClass = $isPrimary ? 'bg-brand-primary py-20' : 'metallic-light bg-elevation-surface py-20';
    $textClass = $isPrimary ? 'text-text-light!' : '';
    $buttonVariant = $isPrimary ? 'white' : 'solid';
@endphp

<section {{ $attributes->class('section ' . $sectionClass) }}>
    <div class="container flex flex-col gap-8">
        <x-fr-headline data-reveal="up">
            @isset ($proof)
                <x-slot:header>
                    {{ $proof }}
                </x-slot:header>
            @endisset

            <x-slot:title :class="$textClass">
                {{ $title }}
            </x-slot:title>

            <x-slot:description :class="$textClass">
                {{ $description }}
            </x-slot:description>
        </x-fr-headline>

        <x-fr-button data-reveal="up" :variant="$buttonVariant" :href="$ctaHref"> {{ $ctaLabel }} </x-fr-button>

        @if (filled($footer))
            <x-logo-badge :class="$textClass">{{ $footer }}</x-logo-badge>
        @endif
    </div>
</section>
