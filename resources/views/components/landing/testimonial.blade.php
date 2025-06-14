<!-- Testimonial Section -->
<section id="depoimentos" class="relative bg-gradient-to-br from-bg via-surface to-bg text-heading py-24 md:py-28 overflow-hidden">
    <!-- Animated Gradient Overlay -->
    <div class="absolute inset-0 pointer-events-none z-0">
        <div class="absolute top-0 left-1/2 w-[80vw] h-[80vw] -translate-x-1/2 blur-3xl opacity-40 animate-gradient-move rounded-full bg-gradient-to-tr from-brand via-accent-text to-accent-bg"></div>
        <div class="absolute bottom-0 right-0 w-1/3 h-1/3 blur-2xl opacity-30 animate-float-slow bg-gradient-to-br from-brand via-brand-hover to-accent-text rounded-full"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">

        <!-- Testimonials Carousel -->
        <x-landing.testimonial-carousel :testimonials="$testimonialData" />

        <!-- "Todos os Reviews" Button centralizado abaixo dos cards -->
        <div class="flex justify-center mt-12">
            <a
                href="https://bit.ly/main-firece-google-reviews"
                target="_blank"
                class="relative bg-brand text-heading font-semibold px-5 py-2 rounded-full flex items-center space-x-2 shadow-lg overflow-hidden transition group focus:outline-none focus:ring-2 focus:ring-brand hover:bg-brand-hover"
                aria-label="Ver todos os reviews"
            >
                <span class="absolute inset-0 bg-gradient-to-r from-brand via-accent-text to-brand-hover opacity-0 group-hover:opacity-30 transition-all blur-lg animate-glow-pulse"></span>
                <span class="flex items-center gap-4">
                    <x-filament::icon icon="fab-google" class="w-4 h-4"></x-filament::icon>
                <span class="relative z-10 group-hover:scale-105 transition-transform">

                    Todos os Reviews
                </span>
                </span>
                <svg class="w-5 h-5 text-heading relative z-10 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </div>
</section>
