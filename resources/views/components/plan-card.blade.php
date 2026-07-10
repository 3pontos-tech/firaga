@props ([
    'variant' => 'default',
    'tagline' => null
])

@php
    $isFilled = $variant === 'filled';
    $isHighlighted = $variant === 'highlighted';
    $hasBrandHeader = $isHighlighted || $isFilled;

    $wrapperClasses = match ($variant) {
        'filled' => 'bg-brand-primary border-brand-primary',
        'highlighted' => 'border-brand-primary',
        default => 'border-border-base',
    };

    $headerClasses = match ($variant) {
        'filled' => 'border-white/20',
        'highlighted' => 'bg-brand-primary border-brand-primary',
        default => 'bg-elevation-01dp border-border-base',
    };

    $taglineClasses = $hasBrandHeader ? 'text-text-light!' : '';
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
