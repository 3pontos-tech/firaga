@props([
    'post' => null,
])

<a href="{{ route('blog.show', ['post' => $post->slug]) }}">
    <article
        class="group bg-linear-to-br from-bg to-surface hover:from-surface hover:to-bg transition-all duration-500 rounded-2xl overflow-hidden "
        style="will-change: transform; transform: translateY(0.1vw);">
        <div class="grid md:grid-cols-2 gap-0">
            <div class="relative h-32 md:h-80 overflow-hidden"><img
                    alt="{{ $post->title }} Cover" loading="lazy"
                    decoding="async" data-nimg="fill"
                    class="object-cover transition-transform duration-300 group-hover:scale-105"
                    style="position: absolute; height: 100%; width: 100%; inset: 0; color: transparent;"
                    src="{{ $post->thumbnail->getSignedUrl() }}">
                <div class="absolute top-4 left-4">
                    @foreach($post->categories as $category)
                        <span
                            class="bg-neutral-hover mx-1 text-heading px-3 py-1 rounded-full text-xs font-semibold">
                            {{ $category->name ?? 'Code' }}
                        </span>
                    @endforeach
                </div>
            </div>
            <div class="p-8 flex flex-col justify-center">
                <div class="flex items-center text-primary-content gap-4 text-xs  mb-4">
                    <div class="flex items-center gap-1">
                        <x-heroicon-c-calendar class="h-3 w-3"/>
                        {{ $post->published_at->format('d/m/Y') }}
                    </div>
                    <div class="flex items-center gap-1">
                        <x-heroicon-c-clock class="h-3 w-3"/>
                        {{ $post->read_time_in_minutes }} minutos de leitura
                    </div>
                </div>
                <h3 class="text-2xl text-heading group-hover:textneutral font-bold mb-4  transition-colors">
                    {{ $post->title }}
                </h3>
                <p class="text-primary-content mb-6 line-clamp-3">
                    {{ $post->excerpt }}
                </p>
                <div class="flex items-center gap-3">
                    <img alt="Carlos Silva" loading="lazy"
                         width="32" height="32"
                         decoding="async" data-nimg="1"
                         class="rounded-full w-10 h-10"
                         style="color: transparent;"
                         src="{{ $post->author->thumbnail->getSignedUrl() }}">
                    <div>
                        <p class="text-sm text-heading font-medium">{{ $post->author->name }}</p>
                        <p class="text-xs text-primary-content">{{ "Consultor Financeiro" }}</p>
                    </div>
                </div>
            </div>
        </div>
    </article>
</a>


