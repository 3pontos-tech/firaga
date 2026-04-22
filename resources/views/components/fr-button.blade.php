@props ([
    'as' => 'button',
    'href' => null,
    'type' => 'button',
    'size' => 'md',
    'rounded' => 'full',
    'block' => false,
    'disabled' => false,
    'loading' => false
])

@php
    $isLink = filled($href);
    $tag = $isLink ? 'a' : $as;
    $isBusy = $loading;
    $isDisabled = $disabled || $isBusy;

    $hasLabel = $slot->isNotEmpty();
    $isSquare = !$hasLabel;

    $classes = collect([
        'fr-button',
        'fr-button-size-' . $size,
        'fr-button-rounded-' . $rounded,
        $block ? 'fr-button-block' : null,
        $isSquare ? 'fr-button-square' : null,
    ])
        ->filter()
        ->implode(' ');
@endphp

<{{ $tag }}
    @if (!$isLink)
        type="{{ $type }}"
        @if ($isDisabled) disabled @endif
    @else
        href="{{ $href }}"
        @if ($isDisabled)
            aria-disabled="true"
            tabindex="-1"
        @endif
    @endif
    @if ($isBusy) aria-busy="true" @endif
    {{ $attributes->class($classes) }}
>
    @isset ($leading)
        {{ $leading }}
    @endisset

    @if ($hasLabel)
        <span class="{{ $isBusy ? 'opacity-0' : 'opacity-100' }}">{{ $slot }}</span>
    @endif

    @isset ($trailing)
        {{ $trailing }}
    @endisset

    @if ($isBusy)
        <span class="fr-button-spinner">
            <svg class="size-4 animate-spin" viewBox="0 0 24 24" aria-hidden="true">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none" />
                <path class="opacity-75" d="M4 12a8 8 0 018-8" stroke="currentColor" stroke-width="4" stroke-linecap="round" fill="none" />
            </svg>
        </span>
    @endif
</{{ $tag }}>
