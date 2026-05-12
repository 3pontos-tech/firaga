@props (['variant' => 'default', 'align' => 'center'])

@php
    $textColor = match ($variant) {
        'high' => 'text-text-high!',
        'dark' => 'text-text-light!',
        default => '',
    };

    $alignmentClasses = match ($align) {
        'left' => 'items-start',
        'left-desk' => 'items-center md:items-start',
        default => 'items-center justify-center',
    };
@endphp

<div
    {{
        $attributes->class(
            'flex w-full flex-col gap-2 ' . $alignmentClasses,
        )
    }}
>
    <x-avatar-group />

    <x-fr-text class="font-semibold! {{ $textColor }}" size="sm"> {{ $slot }} </x-fr-text>
</div>
