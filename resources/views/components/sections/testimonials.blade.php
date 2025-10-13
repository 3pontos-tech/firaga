@props([
    'testimonials' => [],
    'headline'
])


@php
    $variant=$renderable->theme->value;
    $isMetallic = $variant === 'metallic';

    $cardHover = $isMetallic
        ? 'bg-gradient-to-r from-[#D6D6D6] via-[#FFFFFF] to-[#D6D6D6]'
        : 'bg-brand-primary';

    $sectionBg = $isMetallic ? 'bg-[#131314] border-y border-outline-dark' : 'bg-base-200/80';
@endphp

<section class="{{ $sectionBg }} bg-gradient-to-b from-brand-primary/1 to-brand-primary/2">
    <div
        class="py-8 sm:py-12 md:py-16 mx-auto flex flex-col
        md:container px-4 sm:px-6 lg:px-8">
        <div>
            <x-headline :component="$headline" />
        </div>

        <div class="overflow-x-hidden lg:mask-none mask-l-from-95% mask-l-to-99% mask-r-from-95% mask-r-to-99%">
            <div
                class="mx-4 sm:mx-5 flex animate-infinite-scroll gap-6 lg:animate-none rounded-xl sm:rounded-2xl">
                @foreach(range(1,2) as $idx)
                    <div
                        class="flex {{ $idx == 2 ? 'lg:hidden' : 'lg:grid' }} lg:grid-cols-4 lg:min-w-[500px] gap-4
                         sm:gap-6 md:gap-8 min-h-[400px] items-end">
                        @foreach($testimonials as $testimonial)
                            <x-card-v2
                                class="min-w-[250px] animate-pulse  transition-all hover:animate-none duration-1000 ease-in-out"
                                text-box="mt-2 gap-2 flex-col transition-discrete! duration-1000 ease-in-out"
                                emphasis="primary" :interactive="true"
                            >
                                <x-slot:title >
                                    <img alt="Avatar" src="{{ $testimonial->getFirstMediaUrl('avatar') }}"
                                         class="w-12 rounded-full object-cover border-white border-2" />

                                </x-slot:title>
                                <x-slot:description class="line-clamp-8 overflow-hidden max-h-12
                                    group-hover/card:max-h-48 transition-all duration-500 ease-in-out">
                                    {{ $testimonial->comment }}
                                </x-slot:description>
                                <x-slot:footer class="lg:flex justify-between">
                                    <div class="flex">
                                        <x-heroicon-c-star class="w-4 h-4 sm:w-5 sm:h-5 group-hover/card:text-brand-accent text-amber-400 flex-shrink-0 mt-0.5" />
                                        <x-heroicon-c-star class="w-4 h-4 sm:w-5 sm:h-5 group-hover/card:text-brand-accent text-amber-400 flex-shrink-0 mt-0.5" />
                                        <x-heroicon-c-star class="w-4 h-4 sm:w-5 sm:h-5 group-hover/card:text-brand-accent text-amber-400 flex-shrink-0 mt-0.5" />
                                        <x-heroicon-c-star class="w-4 h-4 sm:w-5 sm:h-5 group-hover/card:text-brand-accent text-amber-400 flex-shrink-0 mt-0.5" />
                                        <x-heroicon-c-star class="w-4 h-4 sm:w-5 sm:h-5 group-hover/card:text-brand-accent text-amber-400 flex-shrink-0 mt-0.5" />
                                    </div>
                                    <span class="text-text-high group-hover/card:text-brand-accent px-0.5">
                                        {{ $testimonial->name }}
                                    </span>
                                </x-slot:footer>
                            </x-card-v2>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
