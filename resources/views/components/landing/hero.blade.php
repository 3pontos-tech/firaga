@props([
    'heroData' => []
])

<!-- Hero Section -->
<section class="relative min-h-screen md:min-h-[75vh] flex items-center overflow-hidden py-28 bg-gradient-to-br from-base-200 to-base-300">
    <!-- Animated Gradient Background -->

    <div class="relative container mx-auto px-6 lg:flex lg:items-center lg:justify-between z-10">
        <!-- Right: Circular Logo (Mobile Only) -->
        <div class="flex justify-center items-center mb-8 lg:hidden">
            <x-logo :minimal="true" class="w-32"></x-logo>
        </div>
        <!-- Left: Headline + Copy + CTA -->
        <x-headers.headline
            :headline="$heroData['heading']"
            :description="$heroData['subheading']"
            :button-text="$heroData['button_text']"
            :button-url="$heroData['button_url']"
        />
        <!-- Right: Circular Logo (Desktop Only) -->
        <div class="mt-12 lg:mt-0 lg:w-1/2 md:flex justify-center items-center hidden lg:flex">
            <div class="relative  flex items-center justify-center rounded-full animate-fade-in delay-300 transition-all duration-300">
                <img src="{{ asset('images/stock/hero-stock.png') }}" alt="Fire|ce Logo" class=" object-cover">
            </div>
        </div>
    </div>
</section>
