@props([
    'hero',
    'timeline',
    'benefits',
])

@php
    $from = $hero['gradient_from'];
    $to = $hero['gradient_to'] ?? 'transparent';
    $gradientDirection = 'to right';

    $heroGradient = "linear-gradient($gradientDirection, {$from}, {$to})";

    $numbersGradient = "linear-gradient(to bottom, {$from}, {$to})";
    $inverseNumbersGradient = "linear-gradient(to top, {$to}, {$from})"
@endphp

<section class="container grid grid-cols-1 lg:grid-cols-2 gap-8 mx-auto p-8 lg:py-12 items-center justify-center">
    @if($hero['badge'])
        <x-filament::icon icon="{{ $hero['badge'] }}" class="w-28 h-8 -mb-2 text-text-light" />
    @endif

    <div
        class="lg:col-span-2 rounded-xl grid grid-cols-1 lg:grid-cols-2 items-center justify-center gap-8 lg:gap-16 p-6 lg:p-16"
        style="background: {{ $heroGradient }};"
    >
            <h1 class="text-2xl sm:text-2xl lg:text-4xl font-bold text-text-light leading-[1.5]">
                {{ $hero['title'] }}
            </h1>

            <p class="text-md sm:text-md lg:text-xl text-text-light leading-[1.5]">
                {{ $hero['description'] }}
            </p>
    </div>

    <x-card-v2 class="h-full">
        <x-slot:title class="mb-2">
            {{ $timeline['title'] }}
        </x-slot:title>
        <x-slot:description>
            {{ $timeline['description'] }}
        </x-slot:description>
        <div class="flex flex-col mt-4 text-text-light">
            @foreach($timeline['steps'] as $step)
                <div class="flex gap-4">
                    <div class="flex flex-col items-center">
                        <span
                            class="flex items-center justify-center h-8 w-8 rounded-full text-xl flex-shrink-0"
                            style="background: {{ $numbersGradient }};">
                            {{ $loop->iteration }}
                        </span>
                        @if(!$loop->last)
                            <div
                                class="w-0.5 flex-1"
                                style="background: {{ $inverseNumbersGradient }};">
                            </div>
                        @endif
                    </div>
                    <div class="pb-8 flex-1 mt-1">
                        <p class="text-text-high leading=[1.5]">{{ $step['header'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </x-card-v2>

    <x-card-v2 class="h-full">
        <x-slot:title class="mb-2">
            {{ $benefits['title'] }}
        </x-slot:title>
        <x-slot:description>
            {{ $benefits['description'] }}
        </x-slot:description>
        <div class="flex flex-col gap-8 mt-4 text-text-light">
            @foreach($benefits['items'] as $benefit)
                <div class="flex gap-4 items-center">
                    <x-filament::icon icon="heroicon-s-check" class="w-8 h-8" style="color: {{ $hero['gradient_from'] }};" />
                    <p class="flex flex-1 text-text-high leading=[1.5]">{{ $benefit['header'] }}</p>
                </div>
            @endforeach
        </div>
    </x-card-v2>
</section>
