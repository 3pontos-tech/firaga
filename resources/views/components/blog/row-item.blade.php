@props([
    'post' => null,
])

<div>
    <a
        href="{{ route('blog.show', ['post' => $post->slug]) }}">
        <article
            class="group bg-linear-to-br from-base-200 to-base-300 hover:from-base-300 hover:to-base-200 transition-all duration-500 rounded-xl overflow-hidden"
        >
            <div class="grid md:grid-cols-[200px_1fr_auto] gap-6 p-6">
                <div class="relative h-48 overflow-hidden rounded-lg">
                    <img
                        alt="{{ $post->title }}"
                        loading="lazy" decoding="async" data-nimg="fill"
                        class="object-cover transition-transform duration-300 group-hover:scale-105"
                        style="position: absolute; height: 100%; width: 100%; inset: 0; color: transparent;"
                        src="{{ $post->thumbnail->getSignedUrl() }}">

                </div>
                <div class="flex-1 flex flex-col justify-between min-w-0">
                    <div class="">
                        <div class="flex items-center gap-2 text-xs text-primary-content mb-2">
                            @foreach($post->categories->take(1) as $category)
                                <span class=" text-base-content border-1 border-base-content px-2 py-1 rounded-full text-xs font-semibold">
                                    {{ $category->name ?? 'Code' }}
                                </span>
                            @endforeach
                            <div class="flex items-center gap-1 bg-primary/90 px-2 py-1 rounded-full">
                                <x-heroicon-c-calendar class="h-3 w-3"/>
                                {{ $post->published_at->format('d/m/Y') }}
                            </div>
                            <div class="flex items-center gap-1 bg-primary/90 px-2 py-1 rounded-full">
                                <x-heroicon-c-clock class="h-3 w-3 "/>
                                {{ $post->read_time_in_minutes }} min
                            </div>
                        </div>
                        <h3 class="text-lg text-base-content font-bold mb-2 group-hover:text-primary transition-colors line-clamp-2">
                            {{ $post->title }}
                        </h3>
                        <p class="text-base-content text-sm mb-3 line-clamp-2">
                            {{ $post->excerpt }}
                        </p>
                    </div>
                    <div class="flex items-center gap-2">
                        <img alt="{{ $post->author->name ?? '' }}" loading="lazy"
                             decoding="async" data-nimg="1"
                             class="rounded-full w-10 h-10 bg-primary/50"
                             style="color: transparent;"
                             src="{{ $post->author->thumbnail->url }}">
                        <span class="text-xs text-base-content">{{ $post->author->name }}</span>
                    </div>
                </div>
                <div class="flex items-center">
                    <x-heroicon-c-arrow-right
                        class="h-5 w-5 text-primary group-hover:translate-x-1 transition-transform hidden md:block"/>
                    <button
                        class="w-full rounded-xl md:hidden flex items-center justify-between flex-row bg-primary text-primary-content font-semibold p-3  hover:bg-neutral ">
                        Ir para Artigo
                        <x-heroicon-c-arrow-right
                            class="h-5 w-5 text-base-content group-hover:translate-x-1 transition-transform"/>
                    </button>
                </div>
            </div>
        </article>
    </a></div>
