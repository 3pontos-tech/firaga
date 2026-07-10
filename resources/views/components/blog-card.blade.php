@props ([
    'image',
    'title',
    'description' => null,
    'authorName' => null,
    'authorRole' => null,
    'authorAvatar' => null
])

<article
    {{
        $attributes->class(
            'border-border-base flex items-center gap-4 rounded-xs border p-3 md:flex-col md:items-stretch',
        )
    }}
>
    <img
        src="{{ $image }}"
        alt="{{ $title }}"
        class="order-last size-20 shrink-0 rounded-sm object-cover md:order-first md:aspect-video md:size-auto md:w-full"
    />

    <div class="flex min-w-0 flex-1 flex-col gap-2 md:w-full md:flex-none">
        <p class="font-display text-text-high md:text-md text-xs leading-tight font-semibold">{{ $title }}</p>

        @if ($description)
            <x-fr-text size="xs" class="text-text-high! hidden md:block">{{ $description }}</x-fr-text>
        @endif

        <hr class="border-border-base hidden w-full md:block" />

        @if ($authorName)
            <div class="flex items-center gap-2.5">
                @if ($authorAvatar)
                    <x-avatar :src="$authorAvatar" :alt="$authorName" class="hidden md:block" />
                @endif
                <div class="flex flex-col">
                    <x-fr-text size="xs" class="text-brand-primary! font-medium!">{{ $authorName }}</x-fr-text>
                    @if ($authorRole)
                        <x-fr-text size="xs" class="text-text-medium!">{{ $authorRole }}</x-fr-text>
                    @endif
                </div>
            </div>
        @endif
    </div>
</article>
