@props([
    'post' => null,
])

<div>
    <a href="{{ route('blog.show', ['post' => $post->slug]) }}">
        <article
            class="group bg-surface rounded-xl overflow-hidden hover:bg-bg transition-all duration-300 lg:min-h-[420px] flex flex-col justify-between">
            <div class="relative h-48 overflow-hidden">
                <img
                    alt="Investimentos Estratégicos para Profissionais de TI" loading="lazy"
                    decoding="async" data-nimg="fill"
                    class="object-cover transition-transform duration-300 group-hover:scale-105"
                    style="position: absolute; height: 100%; width: 100%; inset: 0; color: transparent;"
                    src="{{ $post->thumbnail->url }}">
                <div class="absolute top-4 left-4">
                    @foreach($post->categories as $category)
                        <span
                            class="bg-brand-hover mx-1 text-heading px-3 py-1 rounded-full text-xs font-semibold">
                            {{ $category->name ?? 'Code' }}
                        </span>
                    @endforeach
                </div>
            </div>
            <div class="p-6">
                <div class="flex items-center gap-4 text-xs text-zinc-400 mb-3">
                    <div class="flex items-center gap-1">
                        <x-heroicon-c-calendar class="h-3 w-3"/>
                        {{ $post->published_at->format('d/m/Y') }}
                    </div>
                    <div class="flex items-center gap-1">
                        <x-heroicon-c-clock class="h-3 w-3"/>
                        {{ $post->read_time_in_minutes }} min
                    </div>
                </div>
                <h3 class="text-lg text-heading font-bold mb-3 group-hover:text-fire-500 transition-colors">
                    {{ $post->title }}
                </h3>
                <p class="text-body text-sm mb-4 line-clamp-3">
                    {{ $post->excerpt }}
                </p>
            </div>
            <div class="p-6 ">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2 mr-4">
                        <div class="flex items-center">
                            <img alt="{{ $post->authors[0]->name ?? '' }}" loading="lazy"
                                 decoding="async" data-nimg="1"
                                 class="rounded-full w-8 h-8"
                                 src="{{ $post->authors[0]->thumbnail->url }}">
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xs text-body">{{ $post->authors[0]->name }}</span>
                            <span class="text-xs text-muted">Consultor Financeiro</span>
                        </div>
                    </div>
                    <x-heroicon-c-arrow-right
                        class="h-5 w-5 text-brand group-hover:translate-x-1 transition-transform"/>
                </div>
            </div>
        </article>
    </a>
</div>
