@props (['number', 'title' => null, 'showChevron' => true, 'inverted' => false])

@php
    $numberColor = $inverted ? 'text-text-light' : 'text-brand-primary';
    $chevronColor = $inverted ? 'text-text-light' : 'text-icon-medium';
    $textColorClass = $inverted ? 'text-text-light!' : '';
@endphp

<div {{ $attributes->class('flex flex-col gap-3') }}>
    <div class="flex items-center justify-between">
        <p class="font-display text-xl font-medium {{ $numberColor }}">{{ $number }}</p>

        @if ($showChevron)
            <x-heroicon-c-chevron-right class="size-7 {{ $chevronColor }}" />
        @endif
    </div>

    <x-fr-headline align="left" size="sm" container-class="gap-2!">
        @if (filled($title))
            <x-slot:title :class="$textColorClass">
                {{ $title }}
            </x-slot:title>
        @endif

        <x-slot:description :class="$textColorClass">
            {{ $slot }}
        </x-slot:description>
    </x-fr-headline>

    @isset ($footer)
        {{ $footer }}
    @endisset
</div>
