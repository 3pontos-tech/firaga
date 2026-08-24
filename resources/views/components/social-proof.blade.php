{{--
    size: 'sm' segue o bloco compacto do hero (avatares de 24px + label de 16px);
    'md' segue o bloco dos banners (avatares de 32px + label de 14px).
--}}
@props (['variant' => 'default', 'align' => 'center', 'size' => 'md'])

@php
    [$avatarSize, $textSize] = match ($size) {
        'sm' => ['sm', 'md'],
        default => ['md', 'sm'],
    };

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
    <x-avatar-group :size="$avatarSize" />

    <x-fr-text class="font-semibold! {{ $textColor }}" :size="$textSize"> {{ $slot }} </x-fr-text>
</div>
