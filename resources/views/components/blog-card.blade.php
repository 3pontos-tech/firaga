@props (['post', 'featured' => false])

@php
    $postAuthor = $post->author;
    $cover = $post->getFirstMediaUrl('cover') ?: asset('images/guys-looking-at-notebook.png');

    $cardRadius = $featured ? 'rounded-none' : 'rounded-sm';
    $imageRadius = $featured ? 'rounded-none' : 'rounded-md';
    $imageSize = $featured ? 'h-56 md:h-64' : 'aspect-[385.33/204]';
    $cardGap = $featured ? 'gap-4' : 'gap-3';

    $titleHtml = null;
    if ($featured) {
        $words = preg_split('/\s+/', trim($post->title)) ?: [];
        $titleHtml = collect($words)
            ->map(
                fn(string $word, int $i): string => $i % 2 === 0
                    ? '<span class="text-brand-primary">' . e($word) . '</span>'
                    : e($word),
            )
            ->implode(' ');
    }
@endphp

<article
    {{
        $attributes->class(
            "border-border-base flex flex-col {$cardGap} border p-4 {$cardRadius}",
        )
    }}
>
    <img
        src="{{ $cover }}"
        alt="{{ $post->thumbnail_alt ?: $post->title }}"
        class="{{ $imageSize }} {{ $imageRadius }} w-full object-cover"
    />

    <div class="flex flex-1 flex-col gap-3">
        @if ($featured)
            <h3 class="fr-heading fr-heading-size-sm">{!! $titleHtml !!}</h3>
        @else
            <x-fr-heading :level="3" size="xs" class="line-clamp-2">{{ $post->title }}</x-fr-heading>
        @endif

        <x-fr-text size="sm" class="line-clamp-2">{{ $post->excerpt() }}</x-fr-text>
    </div>

    <hr class="border-border-base" />

    <div class="flex items-center gap-3">
        @if ($postAuthor->getFirstMediaUrl('avatar'))
            <x-avatar :src="$postAuthor->getFirstMediaUrl('avatar')" :alt="$postAuthor->name" size="md" />
        @endif
        <div class="flex flex-col">
            <x-fr-text class="text-brand-primary! font-semibold!" size="xs">{{ $postAuthor->name }}</x-fr-text>
            @if ($postAuthor->role)
                <x-fr-text size="xs">{{ $postAuthor->role }}</x-fr-text>
            @endif
        </div>
    </div>
</article>
