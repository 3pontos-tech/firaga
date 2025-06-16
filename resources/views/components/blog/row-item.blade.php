@props([
    'post' => null,
])

<div>
    <a
        href="{{ route('blog.show', ['post' => $post->slug]) }}">
        <article
            class="group bg-gradient-to-br from-bg to-surface hover:from-surface hover:to-bg transition-all duration-500 rounded-xl overflow-hidden"
        >
            <div class="grid md:grid-cols-[200px_1fr_auto] gap-6 p-6">
                <div class="relative h-48 overflow-hidden rounded-lg">
                    <img
                        alt="{{ $post->title }}"
                        loading="lazy" decoding="async" data-nimg="fill"
                        class="object-cover transition-transform duration-300 group-hover:scale-105"
                        style="position: absolute; height: 100%; width: 100%; inset: 0; color: transparent;"
                        src="{{ $post->thumbnail->url }}">
                    <div class="absolute top-2 left-2">
                        <span class="bg-brand text-black px-2 py-1 rounded text-xs font-semibold">Code Capital</span>
                    </div>
                </div>
                <div class="flex-1 flex flex-col justify-between min-w-0">
                    <div class="">
                        <div class="flex items-center gap-4 text-xs text-body mb-2">
                            <div class="flex items-center gap-1">
                                <x-heroicon-c-calendar class="h-3 w-3"/>
                                {{ $post->published_at->format('d/m/Y') }}
                            </div>
                            <div class="flex items-center gap-1">
                                <x-heroicon-c-clock class="h-3 w-3"/>
                                {{ $post->read_time_in_minutes }}
                            </div>
                        </div>
                        <h3 class="text-lg text-heading font-bold mb-2 group-hover:text-brand transition-colors line-clamp-2">
                            {{ $post->title }}
                        </h3>
                        <p class="text-body text-sm mb-3 line-clamp-2">
                            {{ $post->excerpt }}
                        </p>
                    </div>
                    <div class="flex items-center gap-2">
                        <img alt="{{ $post->author->name ?? '' }}" loading="lazy"
                             decoding="async" data-nimg="1"
                             class="rounded-full w-10 h-10"
                             style="color: transparent;"
                             src="{{ $post->author->thumbnail->url }}">
                        <span class="text-xs text-body">{{ $post->author->name }}</span>
                    </div>
                </div>
                <div class="flex items-center">
                    <x-heroicon-c-arrow-right
                        class="h-5 w-5 text-brand group-hover:translate-x-1 transition-transform hidden md:block"/>
                    <button class="w-full md:hidden flex items-center justify-between flex-row bg-brand text-heading font-semibold p-3 rounded hover:bg-brand-hover ">
                        Ir para Artigo
                        <x-heroicon-c-arrow-right class="h-5 w-5 text-body group-hover:translate-x-1 transition-transform"/>
                    </button>
                </div>
            </div>
        </article>
    </a></div>
