@props([
    'testimonials' => [],
])


<div
    x-data="{
        activeSlide: 0,
        totalSlides: {{ count($testimonials) }},
        autoplayInterval: null,
        slidesPerView: 1,

        init() {
            this.updateSlidesPerView();
            this.startAutoplay();

            // Pause autoplay on hover
            this.$el.addEventListener('mouseenter', () => this.stopAutoplay());
            this.$el.addEventListener('mouseleave', () => this.startAutoplay());

            // Handle swipe events for mobile
            let touchStartX = 0;
            let touchEndX = 0;

            this.$el.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
            }, { passive: true });

            this.$el.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                this.handleSwipe(touchStartX, touchEndX);
            }, { passive: true });

            // Update slides per view on window resize
            window.addEventListener('resize', () => {
                this.updateSlidesPerView();
            });
        },

        updateSlidesPerView() {
            this.slidesPerView = window.innerWidth >= 768 ? 2 : 1;
        },

        startAutoplay() {
            this.autoplayInterval = setInterval(() => {
                this.next();
            }, 7000);
        },

        stopAutoplay() {
            clearInterval(this.autoplayInterval);
        },

        next() {
            this.activeSlide = (this.activeSlide + 1) % this.totalSlides;
        },

        prev() {
            this.activeSlide = (this.activeSlide - 1 + this.totalSlides) % this.totalSlides;
        },

        goToSlide(index) {
            this.activeSlide = index;
        },

        handleSwipe(startX, endX) {
            const threshold = 50;
            if (startX - endX > threshold) {
                // Swiped left
                this.next();
            } else if (endX - startX > threshold) {
                // Swiped right
                this.prev();
            }
        }
    }"
    class="relative"
>
    <!-- Testimonials Container -->
    <div class="overflow-hidden">
        <div
            class="flex -ml-4 transition-transform duration-700 ease-out"
            :style="{ transform: `translate3d(-${activeSlide * 100 / slidesPerView}%, 0px, 0px)` }"
        >
            @foreach ($testimonials as $index => $testimonial)
                <div
                    aria-roledescription="slide"
                    role="group"
                    class="min-w-0 shrink-0 grow-0 pl-4 basis-full md:basis-1/2"
                    :style="{ transform: 'translate3d(0px, 0px, 0px)' }"
                >
                    <div class="rounded-lg border border-brand-hover bg-surface text-body shadow-sm h-full"
                         data-v0-t="card">
                        <div class="p-8 flex flex-col h-full relative">
                            <!-- Star Rating -->
                            <div class="absolute top-6 right-6">
                                <div class="flex gap-1">
                                    @for ($i = 0; $i < $testimonial->rating; $i++)
                                        <x-heroicon-c-star class="lucide lucide-star w-4 h-4 fill-brand text-brand"/>
                                    @endfor
                                </div>
                            </div>

                            <!-- Author Info -->
                            <div class="flex items-center gap-4 mb-6 pr-20">
                                <span class="relative flex shrink-0 overflow-hidden rounded-full w-14 h-14">
                                    <img class="aspect-square h-full w-full" alt="{{ $testimonial->name }}"
                                         src="{{ asset($testimonial->thumbnail->thumbnail_url) }}">
                                </span>
                                <div class="flex-1">
                                    <h3 class="font-semibold text-heading text-lg">{{ $testimonial->name }}</h3>
                                    <p class="text-sm text-brand font-medium">{{ $testimonial->role }}</p>
                                    <p class="text-sm text-muted">{{ $testimonial->posted_at->format('d/m/Y H:i') }}</p>
                                </div>
                            </div>

                            <div class="flex-1 relative">
                                <x-filament::icon icon="fas-quote-left"
                                                  class="w-8 h-8 text-brand-hover absolute -top-2 z-10 "/>
                                <p class="text-body  leading-relaxed pl-12 text-base">{{ $testimonial->comment }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Navigation Controls -->
    <div class="flex justify-between items-center mt-12">
        <!-- Previous Button -->
        <button
            @click="prev()"
            class="bg-surface backdrop-blur-xl text-heading p-3 rounded-full shadow-xl border border-brand hover:border-brand-hover hover:bg-deep hover:scale-110 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-brand"
            aria-label="Previous testimonial"
        >
            <x-heroicon-m-chevron-left class="w-6 h-6 text-brand"/>
        </button>

        <!-- Indicators -->
        <div class="flex space-x-3">
            @foreach ($testimonials as $index => $testimonial)
                <button
                    @click="goToSlide({{ $index }})"
                    :class="{
                        'w-10 shadow-md shadow-brand/30 scale-110': activeSlide === {{ $index }},
                        'w-3 hover:bg-brand/50 hover:scale-110': activeSlide !== {{ $index }}
                    }"
                    class="h-3 bg-brand rounded-full transition-all duration-300 focus:outline-none"
                    aria-label="Go to slide {{ $index + 1 }}"
                ></button>
            @endforeach
        </div>

        <!-- Next Button -->
        <button
            @click="next()"
            class="bg-surface backdrop-blur-xl text-heading p-3 rounded-full shadow-xl border border-brand hover:border-brand-hover hover:bg-deep hover:scale-110 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-brand"
            aria-label="Next testimonial"
        >
            <x-heroicon-m-chevron-right class="w-6 h-6 text-brand"/>
        </button>
    </div>
</div>
