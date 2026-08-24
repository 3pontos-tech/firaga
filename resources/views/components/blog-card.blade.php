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
    <a
        href="{{ route('blog.show', $post) }}"
        {{
            $attributes->class(
                'border-border-base hover:border-brand-primary flex flex-col gap-2 rounded-none border p-3 transition-colors',
            )
        }}
    >
        <img
            src="{{ $cover }}"
            alt="{{ $post->thumbnail_alt ?: $post->title }}"
            class="h-56 w-full rounded-none object-cover md:aspect-[628/244] md:h-auto"
        />

        <div class="flex flex-1 flex-col">
            <h3 class="fr-heading md:text-md text-sm">{!! $titleHtml !!}</h3>
            <x-fr-text size="md" class="line-clamp-2">{{ $post->excerpt() }}</x-fr-text>
        </div>

        <hr class="border-border-base my-2" />

        <div class="flex items-center gap-2.5">
            @if ($postAuthor->getFirstMediaUrl('avatar'))
                <x-avatar :src="$postAuthor->getFirstMediaUrl('avatar')" :alt="$postAuthor->name" size="md" />
            @endif
            <div class="flex flex-col">
                <x-fr-text class="text-brand-primary! font-semibold!" size="md">{{ $postAuthor->name }}</x-fr-text>
                @if ($postAuthor->role)
                    <x-fr-text size="md">{{ $postAuthor->role }}</x-fr-text>
                @endif
            </div>
        </div>
    </a>
@else
    {{-- Listing card: horizontal on mobile (small image right, no avatar/description), vertical on desktop --}}
    <a
        href="{{ route('blog.show', $post) }}"
        {{
            $attributes->class(
                'border-border-base hover:border-brand-primary flex items-center gap-4 rounded-xs border p-3 transition-colors md:flex-col md:items-stretch md:gap-4',
            )
        }}
    >
        <img
            src="{{ $cover }}"
            alt="{{ $post->thumbnail_alt ?: $post->title }}"
            class="order-2 h-24 w-24 shrink-0 rounded-sm object-cover md:order-none md:aspect-[385.33/204] md:h-auto md:w-full"
        />

        <div class="order-1 flex flex-1 flex-col gap-2 md:order-none">
            <x-fr-heading :level="3" size="xs" class="md:text-md! line-clamp-2">{{ $post->title }}</x-fr-heading>

            <x-fr-text size="md" class="line-clamp-2 hidden md:block">{{ $post->excerpt() }}</x-fr-text>

            <hr class="border-border-base hidden md:mt-auto md:block" />

            <div class="flex items-center gap-2.5">
                @if ($postAuthor->getFirstMediaUrl('avatar'))
                    <x-avatar
                        :src="$postAuthor->getFirstMediaUrl('avatar')"
                        :alt="$postAuthor->name"
                        size="md"
                        class="hidden md:block"
                    />
                @endif
                <div class="flex flex-col">
                    <x-fr-text class="text-brand-primary! font-semibold!" size="md">{{ $postAuthor->name }}</x-fr-text>
                    @if ($postAuthor->role)
                        <x-fr-text size="md">{{ $postAuthor->role }}</x-fr-text>
                    @endif
                </div>
            </div>
        </div>
    </a>
@endif
