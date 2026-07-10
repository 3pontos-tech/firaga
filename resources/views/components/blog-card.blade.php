@props (['post', 'featured' => false])

@php
    $postAuthor = $post->author;
    $cover = $post->getFirstMediaUrl('cover') ?: asset('images/guys-looking-at-notebook.png');
@endphp

@if ($featured)
    @php
        $words = preg_split('/\s+/', trim($post->title)) ?: [];
        $titleHtml = collect($words)
            ->map(
                fn(string $word, int $i): string => $i % 2 === 0
                    ? '<span class="text-brand-primary">' . e($word) . '</span>'
                    : e($word),
            )
            ->implode(' ');
    @endphp
    <article
        {{
            $attributes->class(
                'border-border-base flex flex-col gap-4 rounded-none border p-4',
            )
        }}
    >
        <img
            src="{{ $cover }}"
            alt="{{ $post->thumbnail_alt ?: $post->title }}"
            class="h-56 w-full rounded-none object-cover md:h-64"
        />

        <div class="flex flex-1 flex-col gap-3">
            <h3 class="fr-heading fr-heading-size-sm">{!! $titleHtml !!}</h3>
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
@else
    {{-- Listing card: horizontal on mobile (small image right, no avatar/description), vertical on desktop --}}
    <article
        {{
            $attributes->class(
                'border-border-base flex items-center gap-4 rounded-sm border p-4 md:flex-col md:items-stretch md:gap-3',
            )
        }}
    >
        <img
            src="{{ $cover }}"
            alt="{{ $post->thumbnail_alt ?: $post->title }}"
            class="order-2 h-24 w-24 shrink-0 rounded-md object-cover md:order-none md:aspect-[385.33/204] md:h-auto md:w-full"
        />

        <div class="order-1 flex flex-1 flex-col gap-2 md:order-none md:gap-3">
            <x-fr-heading :level="3" size="xs" class="line-clamp-2">{{ $post->title }}</x-fr-heading>

            <x-fr-text size="sm" class="line-clamp-2 hidden md:block">{{ $post->excerpt() }}</x-fr-text>

            <hr class="border-border-base hidden md:mt-auto md:block" />

            <div class="flex items-center gap-3">
                @if ($postAuthor->getFirstMediaUrl('avatar'))
                    <x-avatar
                        :src="$postAuthor->getFirstMediaUrl('avatar')"
                        :alt="$postAuthor->name"
                        size="md"
                        class="hidden md:block"
                    />
                @endif
                <div class="flex flex-col">
                    <x-fr-text class="text-brand-primary! font-semibold!" size="xs">{{ $postAuthor->name }}</x-fr-text>
                    @if ($postAuthor->role)
                        <x-fr-text size="xs">{{ $postAuthor->role }}</x-fr-text>
                    @endif
                </div>
            </div>
        </div>
    </article>
@endif
