@props ([
    'eyebrow' => null,
    'title' => null,
    'align' => 'top',
    'iconColor' => 'text-brand-primary',
    'iconSize' => 'size-5'
])

<div
    {{
        $attributes->class([
            'flex gap-3',
            'items-center' => $align === 'center',
        ])
    }}
>
    <x-heroicon-c-arrow-right class="{{ $iconSize }} shrink-0 {{ $iconColor }}" />

    <div class="flex flex-col gap-2">
        @if (filled($eyebrow))
            <x-fr-text class="text-brand-primary! font-semibold!">{{ $eyebrow }}</x-fr-text>
        @endif

        @if (filled($title))
            <x-fr-heading size="xs">{{ $title }}</x-fr-heading>
        @endif

        <x-fr-text size="sm">{{ $slot }}</x-fr-text>
    </div>
</div>
