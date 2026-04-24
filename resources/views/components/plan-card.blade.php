@props ([
    'variant' => 'default',
    'tagline' => null
])

@php
    $isHighlighted = $variant === 'highlighted';

    $wrapperClasses = $isHighlighted ? 'border-brand-primary' : 'border-border-base';

    $headerClasses = $isHighlighted ? 'bg-brand-primary border-brand-primary' : 'bg-elevation-01dp border-border-base';

    $taglineClasses = $isHighlighted ? 'text-text-light!' : '';
@endphp

<div
    {{
        $attributes->class([
            'flex flex-col rounded-md border',
            $wrapperClasses,
        ])
    }}
>
    @if ($tagline)
        <div class="flex items-center justify-center rounded-t-md border-b px-4 py-5 {{ $headerClasses }}">
            <x-fr-text class="italic {{ $taglineClasses }}">{{ $tagline }}</x-fr-text>
        </div>
    @endif

    <div class="flex flex-col gap-4 p-8">{{ $slot }}</div>
</div>
