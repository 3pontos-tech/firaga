@props([
    'heroData' => []
])

<!-- Hero Section -->
<section class="relative min-h-[100vh] md:min-h-[75vh] flex items-center  bg-gradient-to-br from-surface via-surface/80 to-surface text-heading overflow-hidden py-28">
    <!-- Animated Gradient Background -->
    <div class="absolute inset-0 pointer-events-none blur-[2px] animate-gradient-x z-0">
        <x-blocks.grid-background/>
    </div>
    <div class="relative container mx-auto px-6 lg:flex lg:items-center lg:justify-between z-10">
        <!-- Right: Circular Logo (Mobile Only) -->
        <div class="flex justify-center items-center mb-8 lg:hidden">
            <x-logo type="auto"></x-logo>
        </div>
        <!-- Left: Headline + Copy + CTA -->
        <x-headers.headline
            :headline="$heroData['heading']"
            :description="$heroData['subheading']"
            :button-text="$heroData['button_text']"
            :button-url="$heroData['button_url']"
        />
        <!-- Right: Circular Logo (Desktop Only) -->
        <div class="mt-12 lg:mt-0 lg:w-1/2 flex justify-center items-center hidden lg:flex">
            <div class="relative w-64 h-64 flex items-center justify-center rounded-full shadow-2xl backdrop-blur-xl animate-fade-in delay-300 transition-all duration-300">
                <x-logo type="auto"></x-logo>
            </div>
        </div>
    </div>
</section>
