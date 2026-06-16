@props ([
    'level' => 1,
    'size' => 'md'
])

@php
    $tag = 'h' . max(1, min($level, 6));
@endphp

<{{ $tag }}
    {{
        $attributes->class([
            'fr-heading',
            'fr-heading-size-' . $size,
        ])
    }}
    >{{ $slot }}</{{ $tag }}
>
