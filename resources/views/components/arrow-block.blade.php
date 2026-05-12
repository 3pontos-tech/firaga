@props ([
    'eyebrow' => null,
    'title' => null,
    'align' => 'top',
    'iconColor' => 'text-brand-primary'
])

<div
    {{
        $attributes->class([
            'flex gap-3',
            'items-center' => $align === 'center',
        ])
    }}
>
    <x-heroicon-c-arrow-right class="size-5 shrink-0 {{ $iconColor }}" />

    <div class="flex flex-col gap-2">
        @if (filled($eyebrow))
            <x-fr-text class="text-brand-primary! font-semibold!" size="xs">{{ $eyebrow }}</x-fr-text>
        @endif

        @if (filled($title))
            <x-fr-heading size="xxs">{{ $title }}</x-fr-heading>
        @endif

        <x-fr-text size="sm">{{ $slot }}</x-fr-text>
    </div>
</div>
