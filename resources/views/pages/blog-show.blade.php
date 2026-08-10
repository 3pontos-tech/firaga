<x-layout.landing>
    <x-slot:metatags>
        <title>{{ $post->meta_title ?: $post->title }} | {{ config('app.name') }}</title>
        <link rel="canonical" href="{{ route('blog.show', $post) }}" />
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
        <meta property="og:image:alt" content="{{ $post->thumbnail_alt ?: $post->title }}" />
    </x-slot:metatags>

    @php ($author = $post->author)

    <article class="section-first flex flex-col gap-8">
        <div class="container flex flex-col gap-6">
            <a
                href="{{ route('blog') }}"
                class="text-text-medium hover:text-brand-primary flex items-center gap-2 transition-colors"
            >
                <x-heroicon-o-arrow-left class="size-4 shrink-0" />
                <x-fr-text size="xs" class="font-semibold!">Voltar ao blog</x-fr-text>
            </a>

            <img
                src="{{ $post->getFirstMediaUrl('cover') ?: asset('images/guys-looking-at-notebook.png') }}"
                alt="{{ $post->thumbnail_alt ?: $post->title }}"
                class="aspect-16/9 max-h-96 w-full rounded-lg object-cover"
                data-reveal="scale"
            />
        </div>

        <div class="container flex flex-col gap-4" data-reveal="up">
            @if ($post->categories->isNotEmpty())
                <div class="flex flex-wrap items-center gap-2">
                    @foreach ($post->categories as $category)
                        <span
                            class="bg-brand-primary/10 text-brand-primary rounded-pill text-xxxs px-3 py-1 font-semibold"
                        >
                            {{ $category->name }}
                        </span>
                    @endforeach
                </div>
            @endif

            <x-fr-heading :level="1" size="xl">{{ $post->title }}</x-fr-heading>

            <div class="flex flex-wrap items-center gap-3">
                @if ($author?->getFirstMediaUrl('avatar'))
                    <x-avatar :src="$author->getFirstMediaUrl('avatar')" :alt="$author->name" size="md" />
                @endif

                @if ($author)
                    <x-fr-text size="xs" class="text-brand-primary! font-semibold!">{{ $author->name }}</x-fr-text>
                @endif

                @if ($post->published_at)
                    <div class="bg-border-base size-1 shrink-0 rounded-full"></div>
                    <x-fr-text size="xs">{{ $post->published_at->format('d/m/Y') }}</x-fr-text>
                @endif

                @if ($post->read_time_in_minutes > 0)
                    <div class="bg-border-base size-1 shrink-0 rounded-full"></div>
                    <x-fr-text size="xs">{{ $post->read_time_in_minutes }} min de leitura</x-fr-text>
                @endif
            </div>
        </div>

        <div class="container flex flex-col gap-8" data-reveal="up">
            @if ($post->excerpt)
                <x-fr-text size="sm" class="border-brand-primary border-l-2 pl-4 font-medium! italic">
                    {{ $post->excerpt }}
                </x-fr-text>
            @endif

            @if (filled($post->content))
                <div
                    class="prose prose-headings:font-display prose-headings:text-text-high prose-p:text-text-medium prose-li:text-text-medium prose-strong:text-text-high prose-blockquote:text-text-medium prose-blockquote:border-brand-primary prose-a:text-brand-primary marker:text-brand-primary max-w-none"
                >
                    @foreach ($post->content as $block)
                        @php ($type = $block['type'] ?? null)
                        @if ($type === 'blog-markdown-text' && filled(data_get($block, 'data.content')))
                            {!! str(data_get($block, 'data.content'))->markdown() !!}
                        @elseif (\App\Enums\CustomComponent::tryFrom((string) $type))
                            {!!
                                \App\View\TemplateRenderer::make()->render(
                                    $post,
                                    $type,
                                    $block['data'] ?? [],
                                )
                            !!}
                        @endif
                    @endforeach
                </div>
            @endif
        </div>

        @if ($author?->description)
            <div class="container">
                <div
                    class="bg-elevation-01dp border-border-base flex flex-col gap-4 rounded-md border p-6 sm:flex-row sm:items-center"
                    data-reveal="up"
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
                        <x-fr-heading :level="2" size="xs">{{ $author->name }}</x-fr-heading>
                        @if ($author->role)
                            <x-fr-text
                                size="xs"
                                class="text-brand-primary! font-semibold!"
                                >{{ $author->role }}</x-fr-text
                            >
                        @endif
                        <x-fr-text size="xs">{{ $author->description }}</x-fr-text>
                    </div>
                </div>
            </div>
        @endif
    </article>

    @if ($related->isNotEmpty())
        <section class="section">
            <div class="container flex flex-col gap-8">
                <x-fr-headline align="left" data-reveal="up">
                    <x-slot:title>
                        Leia <mark>também</mark>
                    </x-slot:title>
                </x-fr-headline>

                <div class="grid grid-cols-1 gap-8 md:grid-cols-3" data-reveal-stagger="140">
                    @foreach ($related as $relatedPost)
                        <x-blog-card :post="$relatedPost" data-reveal="up" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif
</x-layout.landing>
