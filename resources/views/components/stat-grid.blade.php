@props ([
    'stats' => [],
    'highlight' => false
])

<div
    {{
        $attributes->class(
            'mt-4 flex w-full items-center justify-between',
        )
    }}
>
    @foreach ($stats as $i => $stat)
        @if ($i > 0)
            <div class="bg-border-base w-px self-stretch"></div>
        @endif
        <div class="flex flex-col items-start gap-2">
            <x-fr-heading :class="$highlight ? 'text-brand-primary!' : ''">{{ $stat['value'] }}</x-fr-heading>
            <x-fr-text size="xs">{{ $stat['label'] }}</x-fr-text>
        </div>
    @endforeach
</div>
