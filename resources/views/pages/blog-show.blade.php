<x-layout.landing headerBg="bg-brand-primary" headerTheme="[&_a]:text-text-light [&_button]:text-text-light">
    <x-slot:metatags>
        <title>{{ $post->meta_title ?: $post->title }} - {{ config('app.name') }}</title>
        <meta name="description" content="{{ $post->meta_description ?: $post->excerpt() }}" />
        @if ($post->meta_keywords)
            <meta name="keywords" content="{{ $post->meta_keywords }}" />
        @endif
        @if ($post->disable_indexation)
            <meta name="robots" content="noindex, nofollow" />
        @endif
        <meta property="og:title" content="{{ $post->opengraph_title ?: $post->title }}" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="{{ route('blog.show', $post) }}" />
        <meta property="og:description" content="{{ $post->opengraph_description ?: $post->excerpt() }}" />
        <meta property="og:image" content="{{ $post->getFirstMediaUrl('cover') ?: asset('images/meta-logo.png') }}" />
    </x-slot:metatags>

    <article>
        {{-- Hero --}}
        <header class="bg-brand-primary py-(--section-first-gap)">
            <div class="container flex flex-col gap-8">
                <a
                    href="{{ route('blog') }}"
                    class="text-text-light/80 hover:text-text-light inline-flex w-fit items-center gap-2 transition-colors"
                >
                    <x-heroicon-o-arrow-left class="size-4 shrink-0" />
                    <span class="text-sm font-medium">Voltar ao blog</span>
                </a>

                <div class="flex flex-col gap-6 md:max-w-3xl">
                    @if ($post->categories->isNotEmpty())
                        <div class="flex flex-wrap items-center gap-2">
                            @foreach ($post->categories as $category)
                                <span
                                    class="bg-text-light/15 text-text-light rounded-pill px-3 py-1 text-xs font-semibold"
                                >
                                    {{ $category->name }}
                                </span>
                            @endforeach
                        </div>
                    @endif

                    <x-fr-heading :level="1" size="2xl" class="text-text-light!"> {{ $post->title }} </x-fr-heading>

                    @php $author = $post->author; @endphp
                    <div class="flex flex-wrap items-center gap-2">
                        @if ($author?->getFirstMediaUrl('avatar'))
                            <x-avatar :src="$author->getFirstMediaUrl('avatar')" :alt="$author->name" />
                        @endif
                        @if ($author)
                            <x-fr-text class="text-text-light!" size="sm">{{ $author->name }}</x-fr-text>
                            @if ($author->role)
                                <div class="bg-outline-light/40 size-1 shrink-0 rounded-full"></div>
                                <x-fr-text class="text-text-light/70!" size="sm">{{ $author->role }}</x-fr-text>
                            @endif
                        @endif
                        @if ($post->published_at)
                            <div class="bg-outline-light/40 size-1 shrink-0 rounded-full"></div>
                            <x-fr-text class="text-text-light/70!" size="sm">
                                {{ $post->published_at->format('d/m/Y') }}
                            </x-fr-text>
                        @endif
                        @if ($post->read_time_in_minutes > 0)
                            <div class="bg-outline-light/40 size-1 shrink-0 rounded-full"></div>
                            <x-fr-text class="text-text-light/70!" size="sm">
                                {{ $post->read_time_in_minutes }} min de leitura
                            </x-fr-text>
                        @endif
                    </div>
                </div>
            </div>
        </header>

        {{-- Cover --}}
        <div class="bg-brand-primary">
            <div class="container">
                <img
                    src="{{ $post->getFirstMediaUrl('cover') ?: asset('images/guys-looking-at-notebook-but-gray.png') }}"
                    alt="{{ $post->thumbnail_alt ?: $post->title }}"
                    class="h-56 w-full -translate-y-px rounded-sm object-cover md:h-96"
                />
            </div>
        </div>

        {{-- Body --}}
        <div class="section-first">
            <div class="container flex flex-col gap-8 md:max-w-3xl">
                @if ($post->excerpt)
                    <x-fr-text size="md" class="text-text-medium!">{{ $post->excerpt }}</x-fr-text>
                @endif

                @if (filled($post->content))
                    <div class="flex flex-col gap-6">
                        @foreach ($post->content as $block)
                            @if (\App\Enums\CustomComponent::tryFrom($block['type'] ?? ''))
                                {!!
                                    \App\View\TemplateRenderer::make()->render(
                                        $post,
                                        $block['type'],
                                        $block['data'] ?? [],
                                    )
                                !!}
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        {{-- Author bio --}}
        @if ($author?->description)
            <div class="section">
                <div class="container md:max-w-3xl">
                    <div
                        class="bg-elevation-02dp border-border-base flex flex-col gap-4 rounded-lg border p-6 sm:flex-row sm:items-center"
                    >
                        @if ($author->getFirstMediaUrl('avatar'))
                            <x-avatar
                                :src="$author->getFirstMediaUrl('avatar')"
                                :alt="$author->name"
                                size="lg"
                                class="shrink-0"
                            />
                        @endif
                        <div class="flex flex-col gap-1">
                            <x-fr-text size="xs" class="text-text-medium! font-semibold! uppercase">Autor</x-fr-text>
                            <x-fr-heading :level="2" size="sm">{{ $author->name }}</x-fr-heading>
                            @if ($author->role)
                                <x-fr-text size="xs" class="text-text-medium!">{{ $author->role }}</x-fr-text>
                            @endif
                            <x-fr-text size="sm" class="text-text-medium! mt-2">{{ $author->description }}</x-fr-text>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{-- Related posts --}}
        @if ($relatedPosts->isNotEmpty())
            <section class="section">
                <div class="container flex flex-col gap-8">
                    <x-fr-headline align="left">
                        <x-slot:title>
                            Leia também
                        </x-slot:title>
                    </x-fr-headline>

                    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($relatedPosts as $related)
                            @php $relatedAuthor = $related->author; @endphp
                            <a href="{{ route('blog.show', $related) }}" class="group flex flex-col gap-3">
                                <div class="overflow-hidden rounded-sm">
                                    <img
                                        src="{{ $related->getFirstMediaUrl('cover') ?: asset('images/guys-looking-at-notebook-but-gray.png') }}"
                                        alt="{{ $related->thumbnail_alt ?: $related->title }}"
                                        class="h-44 w-full object-cover transition-transform duration-300 group-hover:scale-105"
                                    />
                                </div>

                                <x-fr-heading
                                    :level="3"
                                    size="xs"
                                    class="group-hover:text-brand-primary transition-colors"
                                >
                                    {{ $related->title }}
                                </x-fr-heading>

                                <div class="flex flex-wrap items-center gap-2">
                                    @if ($relatedAuthor?->getFirstMediaUrl('avatar'))
                                        <x-avatar
                                            :src="$relatedAuthor->getFirstMediaUrl('avatar')"
                                            :alt="$relatedAuthor->name"
                                        />
                                    @endif
                                    @if ($relatedAuthor)
                                        <x-fr-text class="text-text-high! font-semibold!" size="xs">
                                            {{ $relatedAuthor->name }}
                                        </x-fr-text>
                                    @endif
                                    @if ($related->published_at)
                                        <div class="bg-border-base size-1 shrink-0 rounded-full"></div>
                                        <x-fr-text class="text-text-medium!" size="xs">
                                            {{ $related->published_at->format('d/m/Y') }}
                                        </x-fr-text>
                                    @endif
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        {{-- Back to blog --}}
        <div class="section mb-(--section-gap)">
            <div class="container flex justify-center">
                <x-fr-button :href="route('blog')" variant="outline">Ver todos os artigos</x-fr-button>
            </div>
        </div>
    </article>
</x-layout.landing>
