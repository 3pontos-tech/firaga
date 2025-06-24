@props([
    'testimonials' => [],
])

@php
    use App\Models\Testimonial;
    if (count($testimonials) == 0) {
        $testimonials = Testimonial::query()
        ->inRandomOrder()
        ->limit(4)
        ->get();
    }
@endphp

    <!-- Testimonial Section -->
<section id="testimonials"
         class="relative bg-linear-to-br from-primary/90 via-primary/70 to-primary/90 py-24 md:py-28 overflow-hidden">
    <div class="absolute inset-0 bg-linear-to-r from-primary to-transparent opacity-50 animate-pulse"></div>

    <div class="container mx-auto px-6 relative z-10">

        <!-- Testimonials Carousel -->
        <x-landing.testimonial-carousel :testimonials="$testimonials"/>

        <!-- "Todos os Reviews" Button centralizado abaixo dos cards -->
        <div class="flex justify-center mt-12">
            <a
                href="https://bit.ly/main-firece-google-reviews"
                target="_blank"
                class="relative bg-primary font-semibold px-5 py-2 rounded-full flex items-center space-x-2 shadow-lg overflow-hidden transition group focus:outline-none focus:ring-2 focus:ring-neutral hover:bg-secondary"
                aria-label="Ver todos os reviews"
            >
                <div class="flex items-center gap-4">
                    <x-filament::icon
                        icon="fab-google"
                        class="w-4 h-4 text-neutral"
                    />
                    <span class="text-primary-content relative z-10 group-hover:scale-105 transition-transform">
                        Todos os Reviews
                    </span>
                </div>
                <x-filament::icon
                    icon="heroicon-o-arrow-right"
                    class="w-4 h-4 text-primary-content opacity-70 group-hover:opacity-100 transition-opacity"
                />
            </a>
        </div>
    </div>
</section>
