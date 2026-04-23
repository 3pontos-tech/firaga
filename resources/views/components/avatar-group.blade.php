@props ([
    'avatars' => [
        ['src' => 'https://i.pravatar.cc/80?img=12', 'alt' => 'User 1'],
        ['src' => 'https://i.pravatar.cc/80?img=32', 'alt' => 'User 2'],
        ['src' => 'https://i.pravatar.cc/80?img=47', 'alt' => 'User 3'],
        ['src' => 'https://i.pravatar.cc/80?img=5', 'alt' => 'User 4'],
        ['src' => 'https://i.pravatar.cc/80?img=68', 'alt' => 'User 5'],
        ['src' => 'https://i.pravatar.cc/80?img=25', 'alt' => 'User 6']
    ]
])

@php
    // size-8 = 32px, -ml-2 = 8px overlap, border-2 = 2px
    // Mask cuts a circle where the NEXT avatar sits, removing this avatar's
    // border at the intersection so strokes don't visually double up.
    $mask = 'radial-gradient(circle at 40px 16px, transparent 18px, black 19px)';
@endphp

<div {{ $attributes->class(['flex items-center']) }}>
    @foreach ($avatars as $avatar)
        <img
            src="{{ $avatar['src'] }}"
            alt="{{ $avatar['alt'] ?? '' }}"
            @class (['border-border-base size-8 rounded-full border-2 object-cover', '-ml-2' => !$loop->first])
            @if (!$loop->last)
                style="mask-image: {{ $mask }}; -webkit-mask-image: {{ $mask }};"
            @endif
        />
    @endforeach
</div>
