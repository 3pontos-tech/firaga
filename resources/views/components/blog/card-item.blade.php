@props([
    'post' => null,
])

<div>
    <a href="{{ route('blog.show', ['post' => $post->slug]) }}">
        <article
            class="group bg-elevation-04dp rounded-xl overflow-hidden hover:bg-base-200 transition-all duration-300  flex flex-col justify-between">
            <div class="relative h-48 overflow-hidden">
                <img
                    alt="{{ $post->title }} cover" loading="lazy"
                    decoding="async" data-nimg="fill"
                    class="object-cover transition-transform duration-300 group-hover:scale-105"
                    style="position: absolute; height: 100%; width: 100%; inset: 0; color: transparent;"
                    src="{{ $post->getFirstMediaUrl('cover') }}">
                <div class="absolute top-4 left-4">
                    @foreach($post->categories as $category)
                        <x-layout.shared.chip variant="custom"
                            class="px-3 py-1 text-xs sm:text-sm bg-brand-primary/40 hover:bg-brand-primary/90 text-white group-hover:bg-icon-high group-hover:text-brand-primary">
                            {{ $category->name ?? 'Code' }}
                        </x-layout.shared.chip>
                    @endforeach
                </div>
            </div>
            <div class="p-6">
                <div class="flex items-center gap-4 text-xs text-text-high mb-3">
                    <div class="flex items-center gap-1">
                        <x-heroicon-c-calendar class="h-3 w-3"/>
                        {{ $post->published_at->format('d/m/Y') }}
                    </div>
                    <div class="flex items-center gap-1">
                        <x-heroicon-c-clock class="h-3 w-3"/>
                        {{ $post->read_time_in_minutes }} min
                    </div>
                </div>
                <h3 class="text-lg text-text-high font-bold mb-3 group-hover:text-brand-primary transition-colors">
                    {{ $post->title }}
                </h3>
                <p class="text-text-medium text-sm mb-4 line-clamp-3">
                    {{ $post->excerpt }}
                </p>
            </div>
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2 mr-4">
                        <div class="flex items-center">
                            <img alt="{{ $post->author->name ?? '' }}"
                                 loading="lazy"
                                 decoding="async"
                                 data-nimg="1"
                                 class="rounded-full object-cover object-center w-8 h-8"
                                 src="{{ $post->author->getFirstMediaUrl('avatar') }}"
                            />
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xs text-text-high">{{ $post->author->name }}</span>
                            <span class="text-xs text-text-medium">Consultor Financeiro</span>
                        </div>
                    </div>
                    <x-heroicon-c-arrow-right
                        class="h-5 w-5 text-brand-primary group-hover:translate-x-1 transition-transform"/>
                </div>
            </div>
        </article>
    </a>
</div>
