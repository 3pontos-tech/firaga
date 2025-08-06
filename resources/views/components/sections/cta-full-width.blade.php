@props([
    'title' => 'Seu talento é internacional, seus investimentos também devem ser.',
    'cta_label' => 'Agende sua análise',
    'cta_url' => 'https://example.com/agende-sua-analise',
])

@php

$variant = $renderable->theme->value;

@endphp

<section class="mt-16 sm:mt-24 md:mt-32">
    <div class="relative text-center flex flex-col items-center justify-center min-h-[300px] sm:min-h-[400px] md:min-h-[500px] lg:min-h-[600px] xl:min-h-[700px]">
        <img src="{{ asset('images/globe.png') }}" alt="CTA Section" class="absolute inset-0 w-full h-full object-cover object-center">
        <div class="absolute top-2 left-2 sm:top-4 sm:left-4 md:top-6 md:left-6 lg:top-8 lg:left-8">
            <x-partials.corner class="w-[40px] h-[40px] sm:w-[60px] sm:h-[60px] md:w-[80px] md:h-[80px] lg:w-[100px] lg:h-[100px]"/>
        </div>
        <div class="absolute bottom-2 right-2 sm:bottom-4 sm:right-4 md:bottom-6 md:right-6 lg:bottom-8 lg:right-8 rotate-180">
            <x-partials.corner class="w-[40px] h-[40px] sm:w-[60px] sm:h-[60px] md:w-[80px] md:h-[80px] lg:w-[100px] lg:h-[100px]"/>
        </div>
        <div class="relative z-10 flex flex-col items-center justify-center max-w-6xl mx-auto px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16">
            <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl font-bold text-white text-center leading-tight max-w-4xl">
                {{ $title }}
            </h2>
            <x-layout.shared.button :href="$cta_url" :$variant class="px-4 py-2 sm:px-6 sm:py-2 md:px-7 md:py-2.5 lg:px-8 lg:py-3 text-sm sm:text-base md:text-lg mt-4 sm:mt-6 md:mt-8 lg:mt-10 text-text-dark">
                {{ $cta_label }}
            </x-layout.shared.button>
        </div>
    </div>
</section>
