@props([
    'post' => null,
])

<a href="{{ route('blog.show', ['post' => $post->slug]) }}">
    <article class="group bg-elevation-04dp rounded-xl overflow-hidden mb-8 group hover:bg-brand-primary">
        <div class="flex flex-row gap-8 p-6 items-center">
            <div class="w-full lg:max-w-[494px] hidden lg:block">
                <div class="overflow-hidden rounded-lg w-full">
                    <svg viewBox="0 0 493 232" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                        <defs>
                            <clipPath id="custom-shape">
                                <path
                                    d="M24 232C10.7452 232 -1.04206e-06 221.255 -2.32751e-06 208L-2.01717e-05 24C-2.14572e-05 10.7452 10.7451 3.03682e-05 24 3.0107e-05L469.769 2.13245e-05C478.861 2.11454e-05 483.505 10.9109 477.202 17.464L437.024 59.2354C389.999 108.125 404.423 188.678 465.491 218.212V218.212C472.431 221.568 470.04 232 462.332 232L24 232Z" />
                            </clipPath>
                        </defs>
                        <image href="{{ $post->getFirstMediaUrl('cover') }}" alt="{{ $post->title }}" width="100%"
                            height="100%" preserveAspectRatio="xMidYMid slice" clip-path="url(#custom-shape)" />
                    </svg>
                </div>
            </div>
            <div class="flex-1 flex flex-col justify-center gap-y-8">
                <div class="flex items-center justify-between">
                    @foreach ($post->categories->take(1) as $category)
                        <x-layout.shared.chip variant="custom"
                            class="px-3 py-1 text-xs sm:text-sm bg-brand-primary/40 hover:bg-brand-primary/90 text-white group-hover:bg-icon-high group-hover:text-brand-primary">
                            {{ $category->name ?? 'Code' }}
                        </x-layout.shared.chip>
                    @endforeach
                    <div class="flex items-center gap-1 bg-primary/90 px-2 py-1 rounded-full">
                        <x-lucide-bookmark class="h-3 w-3 sm:h-4 sm:w-4 text-text-medium group-hover:text-text-high" />
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
                            class="text-text-medium text-xs sm:text-sm line-clamp-2 group-hover:text-text-high lg:block hidden">
                            {{ $post->excerpt }}
                        </p>
                        <div class="h-px bg-outline-low lg:hidden block"></div>
                        <div class="flex items-center gap-4">
                            <img alt="{{ $post->author->name ?? '' }}" loading="lazy" decoding="async" data-nimg="1"
                                class="rounded-full w-10 h-10 sm:w-12 sm:h-12 flex-shrink-0" style="color: transparent;"
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
                    <div class="flex items-center lg:ml-4">
                        <x-lucide-chevron-right
                            class="h-8 w-8 lg:h-10 lg:w-10 text-brand-primary transition-transform hidden lg:block group-hover:hidden" />
                    </div>
                </div>
            </div>
        </div>
    </article>
</a>
