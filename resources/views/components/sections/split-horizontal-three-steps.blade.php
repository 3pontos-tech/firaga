@props([
    'headline',
    'cta_description',
    'cards' => [],
    'actions',
])
@php
    $maxGridColumns = match($cards->columns) {
        1 => 'lg:grid-cols-1',
        2 => 'lg:grid-cols-2',
        default => 'lg:grid-cols-3',
    };
@endphp

<section class="py-12 md:py-16 border-b border-t border-outline-dark mx-auto text-text-dark bg-elevation-01dp dark:text-text-light overflow-hidden ">
    <div class="mx-auto flex flex-col container gap-y-12">
        <div class="flex flex-col items-center gap-y-6">
            <x-headline :component="$headline" />
        </div>
        <div class="grid  {{ $maxGridColumns }} gap-8">
            @foreach($cards as $card)
                <x-card-v2
                        :elevation="2"
                        :card="$card"
                        :interactive="true"
                        text-box="flex flex-col gap-2 md:mx-4 sm:items-start sm:text-left"
                        class="flex flex-col gap-4 m-0! justify-center items-center
                        sm:justify-start text-center h-full sm:flex-row lg:flex-col"
                >
                    <x-slot:icon class="bg-brand-primary rounded-lg group-hover/card:bg-white h-12 w-12 md:h-14 md:w-14 flex items-center justify-center">
                        <x-filament::icon :icon="$card->icon" class="group-hover/card:text-brand-primary w-8 h-8" />
                    </x-slot:icon>

                    <x-slot:title class="text-center md:text-left lg:text-center">
                        {{ $card->title }}
                    </x-slot:title>
                    <x-slot:description class="text-center md:text-left lg:text-center">
                        {{ $card->description }}
                    </x-slot:description>
                </x-card-v2>
            @endforeach
        </div>
        @if(isset($actions))
            <div class="flex w-full flex-col items-center gap-y-4 md:gap-y-8 mt-4 md:mt-8 text-center">
                @if(isset($cta_description))
                    <h3 class="text-text-medium">{{ $cta_description }}</h3>
                @endif
                <div class="flex flex-wrap items-center justify-center gap-4">
                    @foreach($actions as $button)
                        <x-button rounded="sm" :component="$button" />
                    @endforeach
                </div>

            </div>
        @endif
    </div>
</section>
