@props (['variant' => 'default'])

@php
    $textColor = match ($variant) {
        'high' => 'text-text-high!',
        'dark' => 'text-text-light!',
        default => '',
    };
@endphp

<div
    {{
        $attributes->class(
            'flex w-full flex-col items-center justify-center gap-2',
        )
    }}
>
    <x-avatar-group />

    <x-fr-text class="font-semibold! {{ $textColor }}" size="sm"> {{ $slot }} </x-fr-text>
</div>
