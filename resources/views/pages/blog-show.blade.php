<x-layout.landing>
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

    @php $author = $post->author; @endphp

    <article class="pt-8 md:pt-12">
        {{-- Back link --}}
        <div class="container">
            <a
                href="{{ route('blog') }}"
                class="text-text-medium hover:text-brand-primary mx-auto flex w-full max-w-4xl items-center gap-2 transition-colors"
            >
                <x-heroicon-o-arrow-left class="size-4 shrink-0" />
                <span class="text-sm font-medium">Voltar ao blog</span>
            </a>
        </div>

        {{-- Cover image first (dev.to style) --}}
        <div class="container mt-6">
            <img
                src="{{ $post->getFirstMediaUrl('cover') ?: asset('images/guys-looking-at-notebook-but-gray.png') }}"
                alt="{{ $post->thumbnail_alt ?: $post->title }}"
                class="mx-auto aspect-[16/9] w-full max-w-4xl rounded-xl object-cover md:aspect-[2/1]"
            />
        </div>

        {{-- Title + meta --}}
        <div class="container mt-8 md:mt-10">
            <div class="mx-auto flex max-w-3xl flex-col gap-5">
                @if ($post->categories->isNotEmpty())
                    <div class="flex flex-wrap items-center gap-2">
                        @foreach ($post->categories as $category)
                            <span
                                class="bg-brand-primary/10 text-brand-primary rounded-pill px-3 py-1 text-xs font-semibold"
                            >
                                {{ $category->name }}
                            </span>
                        @endforeach
                    </div>
                @endif

                <x-fr-heading :level="1" size="2xl" class="text-text-high!">{{ $post->title }}</x-fr-heading>

                <div class="flex flex-wrap items-center gap-2">
                    @if ($author?->getFirstMediaUrl('avatar'))
                        <x-avatar :src="$author->getFirstMediaUrl('avatar')" :alt="$author->name" />
                    @endif
                    @if ($author)
                        <x-fr-text class="text-text-high! font-semibold!" size="sm">{{ $author->name }}</x-fr-text>
                        @if ($author->role)
                            <div class="bg-border-base size-1 shrink-0 rounded-full"></div>
                            <x-fr-text class="text-text-medium!" size="sm">{{ $author->role }}</x-fr-text>
                        @endif
                    @endif
                    @if ($post->published_at)
                        <div class="bg-border-base size-1 shrink-0 rounded-full"></div>
                        <x-fr-text class="text-text-medium!" size="sm">
                            {{ $post->published_at->format('d/m/Y') }}
                        </x-fr-text>
                    @endif
                    @if ($post->read_time_in_minutes > 0)
                        <div class="bg-border-base size-1 shrink-0 rounded-full"></div>
                        <x-fr-text class="text-text-medium!" size="sm">
                            {{ $post->read_time_in_minutes }} min de leitura
                        </x-fr-text>
                    @endif
                </div>
            </div>
        </div>

        {{-- Body --}}
        <div class="container mt-10 md:mt-12">
            <div class="mx-auto flex max-w-3xl flex-col gap-8">
                @if ($post->excerpt)
                    <x-fr-text
                        size="lg"
                        class="text-text-medium! border-brand-primary/30 border-l-2 pl-4 font-medium! italic"
                    >
                        {{ $post->excerpt }}
                    </x-fr-text>
                @endif

                @if (filled($post->content))
                    <div
                        class="prose prose-lg prose-headings:text-text-high prose-headings:font-semibold prose-h2:mt-10 prose-h3:mt-8 prose-p:text-text-high prose-li:text-text-high prose-strong:text-text-high prose-blockquote:text-text-medium prose-blockquote:border-brand-primary prose-a:text-brand-primary prose-a:font-medium prose-a:no-underline hover:prose-a:underline prose-img:rounded-sm marker:text-brand-primary max-w-none"
                    >
                        @foreach ($post->content as $block)
                            @if (($block['type'] ?? null) === 'blog-markdown-text' && filled(data_get($block, 'data.content')))
                                {!! str(data_get($block, 'data.content'))->markdown() !!}
                            @elseif (\App\Enums\CustomComponent::tryFrom($block['type'] ?? ''))
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
                <div class="container">
                    <div
                        class="bg-elevation-02dp border-border-base mx-auto flex max-w-3xl flex-col gap-4 rounded-lg border p-6 sm:flex-row sm:items-center"
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

        {{-- Related posts (carousel) --}}
        @if ($relatedPosts->isNotEmpty())
            <section class="section mb-(--section-gap)">
                <div class="container flex flex-col gap-8">
                    <x-fr-headline align="left">
                        <x-slot:title>
                            Leia também
                        </x-slot:title>
                    </x-fr-headline>

                    <div
                        class="[&::-webkit-scrollbar]:hidden flex snap-x snap-mandatory gap-6 overflow-x-auto pb-2 [scrollbar-width:none]"
                    >
                        @foreach ($relatedPosts as $related)
                            @php $relatedAuthor = $related->author; @endphp
                            <a
                                href="{{ route('blog.show', $related) }}"
                                class="group flex w-72 shrink-0 snap-start flex-col gap-3 sm:w-80"
                            >
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
    </article>
</x-layout.landing>
