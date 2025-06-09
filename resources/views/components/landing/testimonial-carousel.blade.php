@props([
    'testimonials' => [],
])

<div
    x-data="{
        activeSlide: 0,
        totalSlides: {{ count($testimonials) }},
        autoplayInterval: null,

        init() {
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
    <div class="relative overflow-hidden">
        <div
            class="flex transition-transform duration-700 ease-out"
            :style="{ transform: `translateX(-${activeSlide * 100}%)` }"
        >
            @foreach ($testimonials as $index => $testimonial)
                <div class="w-full flex-shrink-0 px-4 md:px-0">
                    <div
                        class="flex justify-center items-center transition-all duration-700"
                        :class="{ 'opacity-100 scale-100': activeSlide === {{ $index }}, 'opacity-0 scale-95': activeSlide !== {{ $index }} }"
                    >
                        <x-landing.testimonial-item
                            :quote="$testimonial['quote']"
                            :author="$testimonial['author']"
                            :role="$testimonial['role']"
                            :image="$testimonial['image']"
                            :highlighted="true"
                        />
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
            class="bg-surface/90 backdrop-blur-xl text-heading p-3 rounded-full shadow-xl border border-brand/20 hover:border-brand/40 hover:bg-brand/20 hover:scale-110 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-brand"
            aria-label="Previous testimonial"
        >
            <svg class="w-6 h-6 text-brand" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>

        <!-- Indicators -->
        <div class="flex space-x-3">
            @foreach ($testimonials as $index => $testimonial)
                <button
                    @click="goToSlide({{ $index }})"
                    :class="{
                        'w-10 bg-brand shadow-md shadow-brand/30 scale-110': activeSlide === {{ $index }},
                        'w-3 bg-brand/30 hover:bg-brand/50 hover:scale-110': activeSlide !== {{ $index }}
                    }"
                    class="h-3 rounded-full transition-all duration-300 focus:outline-none"
                    aria-label="Go to slide {{ $index + 1 }}"
                ></button>
            @endforeach
        </div>

        <!-- Next Button -->
        <button
            @click="next()"
            class="bg-surface/90 backdrop-blur-xl text-heading p-3 rounded-full shadow-xl border border-brand/20 hover:border-brand/40 hover:bg-brand/20 hover:scale-110 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-brand"
            aria-label="Next testimonial"
        >
            <svg class="w-6 h-6 text-brand" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
</div>
