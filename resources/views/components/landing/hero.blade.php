@props([
    'heroData' => []
])

<!-- Hero Section -->
<section class="relative min-h-[80vh] flex items-center justify-center bg-gradient-to-br from-black via-gray-900 to-black dark:from-black dark:via-gray-900 dark:to-black text-white dark:text-white overflow-hidden py-28">
    <!-- Animated Gradient Background -->
    <div class="absolute inset-0 pointer-events-none animate-gradient-x z-0">
        <div class="w-full h-full bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-orange-900/20 via-transparent to-transparent dark:from-orange-900/30"></div>
    </div>
    <!-- Floating Shapes -->
    <div class="absolute top-10 left-10 w-24 h-24 bg-orange-500/20 rounded-full blur-2xl animate-float-slow z-0"></div>
    <div class="absolute bottom-10 right-10 w-32 h-32 bg-orange-400/10 rounded-full blur-2xl animate-float-fast z-0"></div>
    <div class="relative container mx-auto px-6 lg:flex lg:items-center lg:justify-between z-10">
        <!-- Left: Headline + Copy + CTA -->
        <x-headers.headline :headline="$heroData['headline']" :description="$heroData['subheading']"/>
        <!-- Right: Circular Logo -->
        <div class="mt-12 lg:mt-0 lg:w-1/2 flex justify-center items-center">
            <div class="relative w-64 h-64 flex items-center justify-center group bg-white/10 dark:bg-black/20 rounded-full shadow-2xl border-4 border-orange-500/40 backdrop-blur-xl animate-fade-in delay-300">
                <!-- Outer ring with animation -->
                <div class="absolute inset-0 rounded-full border-4 border-orange-500 animate-spin-slow"></div>
                <!-- Logo icon -->
                <x-logo type="light"></x-logo>
                <!-- Animated dot -->
                <div class="absolute -top-3 -right-3 w-7 h-7 bg-orange-500 rounded-full animate-pulse shadow-lg"></div>
            </div>
        </div>
    </div>
</section>
