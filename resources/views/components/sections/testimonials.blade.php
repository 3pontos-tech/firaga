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
        class="py-12 sm:py-16 md:py-20 lg:py-24 mx-auto flex flex-col gap-y-8 sm:gap-y-10 md:gap-y-12 lg:gap-y-14 container px-4 sm:px-6 lg:px-8">
        <div>
            <x-headline :component="$headline" />
        </div>

        <div>
            <div
                class="mx-4 sm:mx-5 flex animate-infinite-scroll  gap-6 lg:animate-none rounded-xl sm:rounded-2xl">
                @foreach(range(1,2) as $idx)
                    <div
                        class="flex {{ $idx == 2 ? 'lg:hidden' : 'lg:grid' }} p-2  lg:grid-cols-5 lg:min-w-[500px] gap-4 sm:gap-6 md:gap-8 min-h-[500px] items-end">
                        @foreach($testimonials as $testimonial)
                            <x-card-v2
                                class="min-w-[250px] animate-pulse  transition-all hover:animate-none duration-1000 ease-in-out"
                                text-box="mt-2 gap-2 flex-col transition-discrete! duration-1000 ease-in-out"
                                emphasis="primary" :interactive="true"
                            >
                                <x-slot:title >
                                    <img alt="Avatar" src="{{ $testimonial->getFirstMediaUrl('avatar') }}" class="w-12 rounded-full object-cover border-white border-2" />

                                </x-slot:title>
                                <x-slot:description class="line-clamp-2 group-hover/card:line-clamp-none transition">{{ $testimonial->comment }}</x-slot:description>
                                <x-slot:footer>
                                    <div class="flex">
                                        <x-heroicon-c-star class="w-4 h-4 sm:w-5 sm:h-5 group-hover/card:text-white text-amber-400 flex-shrink-0 mt-0.5" />
                                        <x-heroicon-c-star class="w-4 h-4 sm:w-5 sm:h-5 group-hover/card:text-white text-amber-400 flex-shrink-0 mt-0.5" />
                                        <x-heroicon-c-star class="w-4 h-4 sm:w-5 sm:h-5 group-hover/card:text-white text-amber-400 flex-shrink-0 mt-0.5" />
                                        <x-heroicon-c-star class="w-4 h-4 sm:w-5 sm:h-5 group-hover/card:text-white text-amber-400 flex-shrink-0 mt-0.5" />
                                        <x-heroicon-c-star class="w-4 h-4 sm:w-5 sm:h-5 group-hover/card:text-white text-amber-400 flex-shrink-0 mt-0.5" />
                                    </div>
                                    <span class="text-white px-0.5">
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
