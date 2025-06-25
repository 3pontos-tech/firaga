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

            this.$el.addEventListener('mouseenter', () => this.stopAutoplay());
            this.$el.addEventListener('mouseleave', () => this.startAutoplay());

            let touchStartX = 0;
            let touchEndX = 0;

            this.$el.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
            }, { passive: true });

            this.$el.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                this.handleSwipe(touchStartX, touchEndX);
            }, { passive: true });

            window.addEventListener('resize', () => {
                this.updateSlidesPerView();
            });
        },

        updateSlidesPerView() {
            const oldView = this.slidesPerView;
            this.slidesPerView = window.innerWidth >= 768 ? 2 : 1;

            // Ajustar activeSlide quando mudar o número de slides por visualização
            if (oldView !== this.slidesPerView) {
                this.activeSlide = Math.min(this.activeSlide, Math.max(0, this.totalSlides - this.slidesPerView));
            }
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
            if (this.activeSlide + this.slidesPerView >= this.totalSlides) {
                this.activeSlide = 0; // Loop back to the beginning
            } else {
                this.activeSlide += this.slidesPerView;
                // Garantir que não ultrapassamos o limite
                this.activeSlide = Math.min(this.activeSlide, this.totalSlides - this.slidesPerView);
            }
        },

        prev() {
            if (this.activeSlide <= 0) {
                // Loop to the end, ensuring we don't go past available slides
                this.activeSlide = Math.max(0, this.totalSlides - this.slidesPerView);
            } else {
                this.activeSlide = Math.max(0, this.activeSlide - this.slidesPerView);
            }
        },

        goToSlide(index) {
            this.activeSlide = Math.min(index, this.totalSlides - this.slidesPerView);
        },

        handleSwipe(startX, endX) {
            const threshold = 50;
            if (startX - endX > threshold) {
                this.next();
            } else if (endX - startX > threshold) {
                this.prev();
            }
        },

        getSlidePosition() {
            // Calcular posição considerando a largura do slide + gap
            const slideWidth = 100 / this.slidesPerView;
            const gapAdjustment = this.activeSlide * 1; // 1rem gap entre slides
            return `translateX(calc(-${this.activeSlide * slideWidth}% - ${gapAdjustment}rem))`;
        }
    }"
    class="py-12 px-6 relative pb-20"
>
    <div class="max-w-5xl mx-auto relative">
        <div class="flex justify-between items-start mb-16">
            <div class="bg-black text-primary border-primary border-2 px-8 py-4 rounded-xl">
                <h2 class="text-3xl font-bold">Avaliações</h2>
            </div>
        </div>

        <div class="relative overflow-hidden">
            <div
                class="flex transition-transform duration-700 ease-in-out gap-4"
                x-bind:style="`transform: ${getSlidePosition()}`"
            >
                @foreach ($testimonials as $index => $testimonial)
                    <div
                        aria-roledescription="slide"
                        role="group"
                        class="min-w-0 shrink-0 grow-0 pb-16 w-full md:w-[calc(50%-0.5rem)]"
                    >
                        {{-- Speech Bubble --}}
                        <div class="bg-white rounded-xl p-8 relative shadow-lg flex flex-col border border-gray-200 h-[400px]">
                            {{-- Profile Section --}}
                            <div class="flex items-center gap-4 mb-6">
                                <img
                                    src="{{ asset($testimonial->thumbnail->thumbnail_url ?? '/placeholder.svg') }}"
                                    alt="{{ $testimonial->name }}"
                                    class="w-12 h-12 rounded-full object-cover"
                                />
                                <div>
                                    <h3 class="font-bold text-gray-900 text-lg overflow-hidden text-ellipsis whitespace-nowrap max-w-[150px] md:max-w-[200px] lg:max-w-[250px]">
                                        {{ $testimonial->name }}
                                    </h3>
                                    <div class="flex gap-1 mt-1">
                                        @for ($i = 0; $i < 5; $i++)
                                            <x-heroicon-c-star class="w-4 h-4 {{ $i < $testimonial->rating ? 'fill-yellow-400 text-yellow-400' : 'text-gray-300' }}" />
                                        @endfor
                                    </div>
                                </div>
                            </div>

                            {{-- Testimonial Text --}}
                            <p class="text-gray-700 text-base leading-relaxed flex-1 overflow-y-auto">{{ $testimonial->comment }}</p>

                            {{-- Speech Bubble Tail --}}
                            <div class="absolute -bottom-4 left-12">
                                <div class="w-0 h-0 border-l-20 border-l-transparent border-r-20 border-r-transparent border-t-20 border-t-white"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Navigation Controls --}}
        <div class="flex justify-center items-center mt-12">
            {{-- Indicators --}}
            <div class="flex space-x-3">
                @php
                    // Calcular o número correto de indicadores com base no slidesPerView
                    $numIndicators = ceil(count($testimonials) / 2);
                @endphp
                @for ($i = 0; $i < count($testimonials); $i += 2)
                <button
                    @click="goToSlide({{ $i }})"
                    :class="{
                        'w-10 shadow-md shadow-neutral/30 scale-110': activeSlide === {{ $i }} || (activeSlide === {{ $i }} - 1 && {{ $i }} === totalSlides - 1 && slidesPerView === 2),
                        'w-3 hover:bg-neutral/50 hover:scale-110': activeSlide !== {{ $i }} && !(activeSlide === {{ $i }} - 1 && {{ $i }} === totalSlides - 1 && slidesPerView === 2)
                    }"
                    class="h-3 bg-white rounded-full transition-all duration-300 focus:outline-none"
                    aria-label="Go to slide {{ floor($i / 2) + 1 }}"
                ></button>
                @endfor
            </div>
        </div>
    </div>

    {{-- Previous Button --}}
    <button
        @click="prev()"
        class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-orange-500 p-3 rounded-full shadow-md text-white hover:bg-orange-600 transition-colors"
    >
        <x-heroicon-m-chevron-left class="w-6 h-6" />
    </button>

    {{-- Next Button --}}
    <button
        @click="next()"
        class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-orange-500 p-3 rounded-full shadow-md text-white hover:bg-orange-600 transition-colors"
    >
        <x-heroicon-m-chevron-right class="w-6 h-6" />
    </button>
</div>
