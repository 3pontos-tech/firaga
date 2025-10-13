@props([
    'post' => null,
])

@php
    $mediaUrl = $post?->getFirstMediaUrl('cover');
    $coverSrc = $mediaUrl && filter_var($mediaUrl, FILTER_VALIDATE_URL)
        ? $mediaUrl
        : asset('images/stock/default-cover.jpg');

    $alt = $post?->title ?? 'Imagem do post';
@endphp

<a href="{{ route('blog.show', ['post' => $post->slug]) }}">
    <article class="group grid grid-cols-1 lg:grid-cols-7 bg-elevation-04dp rounded-xl overflow-hidden mb-8
            group hover:bg-brand-primary items-center justify-center p-6 gap-8 transition-transform duration-500 hover:scale-101">
        <div class="flex h-full w-full lg:col-span-2 lg:max-w-[494px] hidden sm:block sm:max-h-60 lg:max-h-full">
            <div class="overflow-hidden rounded-lg w-full h-full">
                <img
                    src="{{ $coverSrc }}"
                    alt="{{ $alt }}"
                    class="w-full h-full object-cover object-center"
                    loading="lazy"
                    decoding="async"
                >
            </div>
        </div>
        <div class="flex-1 flex lg:col-span-5 flex-col justify-center gap-y-8">
            <div class="flex items-center justify-between">
                @foreach ($post->categories->take(1) as $category)
                    <x-layout.shared.chip variant="custom"
                                          class="px-3 py-1 text-xs sm:text-sm bg-brand-primary/40 hover:bg-brand-primary/90 text-white group-hover:bg-icon-high group-hover:text-brand-primary">
                        {{ $category->name ?? 'Code' }}
                    </x-layout.shared.chip>
                @endforeach
                <div class="flex items-center gap-1 bg-primary/90 px-2 py-1 rounded-full">
                    <x-lucide-clock class="h-3 w-3 sm:h-4 sm:w-4 text-text-medium group-hover:text-text-high" />
                    <span class="text-xs sm:text-sm text-text-medium group-hover:text-text-high">
                            {{ $post->read_time_in_minutes }} min
                        </span>
                </div>
            </div>
            <div class="flex justify-between items-center lg:flex-row flex-col">
                <div class="flex flex-col gap-y-8 justify-center w-full">
                    <h3
                        class="text-xl sm:text-2xl lg:text-3xl text-text-high font-bold group-hover:text-text-high transition-colors line-clamp-2">
                        {{ $post->title }}
                    </h3>
                    <p
                        class="text-text-medium text-xs sm:text-sm line-clamp-2 group-hover:text-text-high">
                        {{ $post->excerpt }}
                    </p>
                    <div class="h-px bg-outline-low group-hover:bg-outline-light"></div>
                    <div class="flex items-center gap-4">
                        <img alt="{{ $post->author->name ?? '' }}" loading="lazy" decoding="async" data-nimg="1"
                             class=" object-cover object-center rounded-full w-10 h-10 sm:w-12 sm:h-12 flex-shrink-0" style="color: transparent;"
                             src="{{ $post->author->getFirstMediaUrl('avatar') }}">
                        <div class="flex flex-col">
                                <span
                                    class="text-sm sm:text-base text-text-high font-medium">{{ $post->author->name }}</span>
                            <span class="text-xs sm:text-sm text-text-medium group-hover:text-text-high">
                                    Consultor Financeiro
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</a>
