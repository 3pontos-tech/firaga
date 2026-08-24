@props (['src', 'alt' => '', 'size' => 'sm'])

@php
    $sizeClass = match ($size) {
        'lg' => 'size-20',
        'md' => 'size-9',
        default => 'size-8',
    };
@endphp

<img
    src="{{ $src }}"
    alt="{{ $alt }}"
    {{
        $attributes->class([
            $sizeClass,
            'rounded-full object-cover',
        ])
    }}
/>
