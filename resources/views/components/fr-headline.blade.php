@props ([
    'align' => 'center',
    'size' => 'xl',
    'containerClass' => ''
])

@php
    $classes = collect(['fr-headline', 'fr-headline-align-' . $align, 'fr-headline-size-' . $size])->implode(' ');
@endphp

<div {{ $attributes->class($classes) }}>
    <div @class (['fr-headline-container', $containerClass => $containerClass])>
        @isset ($header)
            {{ $header }}
        @endisset

        @isset ($title)
            <h2 {{ $title->attributes->class(['fr-headline-title']) }}> {!! $title !!}</h2>
        @endisset

        @isset ($description)
            <p
                {{
                    $description->attributes->class([
                        'fr-headline-description',
                    ])
                }}
            >
                {!! $description !!}
            </p>
        @endisset

        @isset ($actions)
            <div {{ $actions->attributes->class(['fr-headline-actions']) }}>{{ $actions }}</div>
        @endisset

        @isset ($footer)
            {{ $footer }}
        @endisset
    </div>
</div>
