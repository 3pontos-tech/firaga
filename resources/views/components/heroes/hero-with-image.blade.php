@php
    use App\Enums\CustomComponent;
@endphp

@props([
    'heading',
    'subheading',
    'badge',
    'cta_label',
    'cta_url',
    'style' => 'default',
])

<!-- Hero Section -->
<section class="relative min-h-[75vh] flex flex-col items-center overflow-hidden py-16 md:py-28 gap-y-12 md:gap-y-20">
    <div class="relative mx-auto lg:flex lg:items-center lg:justify-between z-10 container px-4 md:px-6">
        <div class="flex justify-center items-center mb-8 lg:hidden">
            <x-logo :minimal="true" class="w-24 sm:w-32"></x-logo>
        </div>
        <x-headers.headline :headline="$heading" :description="$subheading"
                            :button-text="$cta_label" :button-url="$cta_url">
            <x-slot name="badge">
                <x-layout.shared.chip :variant="$style"  class="px-4 py-2">
                    {{ $badge }}
                </x-layout.shared.chip>
            </x-slot>

            <x-slot name="ctaButton">
                <x-layout.shared.button
                    :href="$cta_url"
                    :variant="$style"
                    class="w-full sm:w-auto px-4 py-3 sm:p-4 font-bold text-sm sm:text-base">
                    {{$cta_label }}
                </x-layout.shared.button>
            </x-slot>
        </x-headers.headline>

        <div class="mt-8 lg:mt-0 lg:w-1/2 hidden lg:flex justify-center items-center">
            <div
                class="relative flex items-center justify-center rounded-full animate-fade-in delay-300 transition-all duration-300">
                <img
                    src="{{ $renderable?->getFirstMediaUrl(CustomComponent::HeroWithImage->value) ?? asset('images/stock/hero-stock.png') }}"
                    alt="Fire|ce Logo"
                    class="w-full h-auto max-w-md lg:max-w-lg xl:max-w-xl object-cover">
            </div>
        </div>


    </div>
</section>
