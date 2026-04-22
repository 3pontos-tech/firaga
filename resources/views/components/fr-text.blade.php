@props ([
    'size' => 'md'
])

<p {{ $attributes->class(['fr-text', 'fr-text-' . $size]) }}>{{ $slot }}</p>
