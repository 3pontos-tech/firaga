@props (['featured' => false, 'inverted' => false])

@php
    $iconColor = $inverted ? 'text-text-light' : ($featured ? 'text-yellow-primary' : 'text-brand-primary');
@endphp

<li class="flex items-center gap-3">
    @if ($featured)
        <x-heroicon-c-star class="size-6 shrink-0 {{ $iconColor }}" />
    @else
        <x-heroicon-c-check class="size-6 shrink-0 {{ $iconColor }}" />
    @endif
    <x-fr-text @class(['text-text-light!' => $inverted])>{{ $slot }}</x-fr-text>
</li>
