@props([
    'headline',
    'cards' => [],

])
@php
    $maxGridColumns = match($cards->columns) {
        1 => 'lg:grid-cols-1',
        2 => 'lg:grid-cols-2',
        default => 'lg:grid-cols-3',
    };
@endphp

<section class="container mx-auto text-text-dark dark:text-text-light overflow-hidden ">
    <div class="mx-auto flex flex-col container gap-y-12">
        <div class="flex flex-col items-center gap-y-6">
            <x-headline :component="$headline" />
        </div>
        <div class="grid  {{ $maxGridColumns }} gap-8">
            @foreach($cards as $card)
                <x-card-v2
                        :card="$card"
                        :interactive="true"
                        text-box="flex flex-col gap-2  md:mx-4"
                        class="flex flex-col gap-y-4 m-0! justify-center items-center text-center h-full md:flex-row lg:flex-col"
                >
                    <x-slot:icon class="bg-brand-primary group-hover/card:bg-white h-12 w-12 md:h-14 md:w-14 flex items-center justify-center">
                        <x-filament::icon :icon="$card->icon" class="group-hover/card:text-brand-primary " />
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
    </div>
</section>

