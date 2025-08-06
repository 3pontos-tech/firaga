@props([
    'testimonials' => [],
    'heading' => 'Escute de nossos clientes',
    'subheading' => 'Veja o que nossos clientes têm a dizer sobre nós.',
    'badge' => 'Avaliações',

])


@php
    $variant=$renderable->theme->value;
    $isMetallic = $variant === 'metallic';

    $cardHover = $isMetallic
        ? 'bg-gradient-to-r from-[#D6D6D6] via-[#FFFFFF] to-[#D6D6D6]'
        : 'bg-brand-primary';

    $sectionBg = $isMetallic ? 'bg-[#131314] border-y border-outline-dark' : 'bg-base-200/80';
@endphp

<section class="{{ $sectionBg }}">
    <div
        class="py-12 sm:py-16 md:py-20 lg:py-24 mx-auto flex flex-col gap-y-8 sm:gap-y-10 md:gap-y-12 lg:gap-y-14 container px-4 sm:px-6 lg:px-8">
        <x-layout.shared.chip :$variant class="px-4 py-2">
            {{ $badge }}
        </x-layout.shared.chip>
        <div class="w-full">
            <h2 class="text-text-high text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight">
                {{ $heading }}
            </h2>
        </div>

        <div class="rounded-2xl w-full">
            <div x-data="{
                active: 0,
                isTransitioning: false,
                autoPlayInterval: null,
                autoPlayDelay: 5000,
                isAutoPlaying: true,
                touchStartX: 0,
                touchEndX: 0,
                cards: {{ json_encode($testimonials) }},
                get cardsPerView() {
                    if (window.innerWidth >= 1280) return 4;
                    if (window.innerWidth >= 1024) return 3;
                    if (window.innerWidth >= 768) return 2;
                    return 1;
                },
                get currentCards() {
                    let cardsToShow = this.cardsPerView;
                    let startIndex = Math.floor(this.active / cardsToShow) * cardsToShow;
                    return this.cards.slice(startIndex, startIndex + cardsToShow);
                },
                get activeIndexInGrid() {
                    return this.active % this.cardsPerView;
                },
                get totalPages() {
                    return Math.ceil(this.cards.length / this.cardsPerView);
                },
                get currentPage() {
                    return Math.floor(this.active / this.cardsPerView);
                },
                next() {
                    if (this.isTransitioning) return;
                    this.isTransitioning = true;
                    setTimeout(() => {
                        this.active = (this.active + 1) % this.cards.length;
                        this.isTransitioning = false;
                    }, 200);
                    this.resetAutoPlay();
                },
                prev() {
                    if (this.isTransitioning) return;
                    this.isTransitioning = true;
                    setTimeout(() => {
                        this.active = (this.active - 1 + this.cards.length) % this.cards.length;
                        this.isTransitioning = false;
                    }, 200);
                    this.resetAutoPlay();
                },
                goToPage(pageIndex) {
                    if (this.isTransitioning) return;
                    this.isTransitioning = true;
                    setTimeout(() => {
                        this.active = pageIndex * this.cardsPerView;
                        this.isTransitioning = false;
                    }, 200);
                    this.resetAutoPlay();
                },
                startAutoPlay() {
                    if (!this.isAutoPlaying) return;
                    this.autoPlayInterval = setInterval(() => {
                        this.next();
                    }, this.autoPlayDelay);
                },
                stopAutoPlay() {
                    if (this.autoPlayInterval) {
                        clearInterval(this.autoPlayInterval);
                        this.autoPlayInterval = null;
                    }
                },
                resetAutoPlay() {
                    this.stopAutoPlay();
                    this.startAutoPlay();
                },
                handleTouchStart(e) {
                    this.touchStartX = e.changedTouches[0].screenX;
                },
                handleTouchEnd(e) {
                    this.touchEndX = e.changedTouches[0].screenX;
                    if (this.touchStartX - this.touchEndX > 50) {
                        this.next();
                    } else if (this.touchEndX - this.touchStartX > 50) {
                        this.prev();
                    }
                },
                handleKeydown(e) {
                    if (e.key === 'ArrowLeft') {
                        this.prev();
                    } else if (e.key === 'ArrowRight') {
                        this.next();
                    }
                }
            }"
                 x-init="
                    window.addEventListener('resize', () => { $nextTick(() => {}) });
                    window.addEventListener('keydown', handleKeydown);
                    startAutoPlay();
                    $watch('isAutoPlaying', value => {
                        if (value) {
                            startAutoPlay();
                        } else {
                            stopAutoPlay();
                        }
                    });
                 "
                 @mouseover="isAutoPlaying = false"
                 @mouseleave="isAutoPlaying = true"
                 class="w-full"
                 role="region"
                 aria-label="Depoimentos de clientes"
                 tabindex="0">
                <div
                    class="relative overflow-hidden w-full"
                    @touchstart="handleTouchStart($event)"
                    @touchend="handleTouchEnd($event)"
                    aria-live="polite">

                    <!-- Left navigation button -->
                    <button
                        @click="prev()"
                        aria-label="Depoimento anterior"
                        class="absolute left-2 sm:left-4 top-1/2 transform -translate-y-1/2 z-10 p-2 sm:p-2.5 md:p-3 transition-all duration-300 cursor-pointer rounded-full shadow-lg hover:scale-110
                        {{ $isMetallic ? 'text-icon-low hover:text-text-high bg-elevation-02dp/90 hover:bg-elevation-02dp' : 'text-text-medium hover:text-text-high bg-white/20 hover:bg-white/30' }}">
                        <x-lucide-chevron-left class="w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6"/>
                    </button>

                    <!-- Right navigation button -->
                    <button
                        @click="next()"
                        aria-label="Próximo depoimento"
                        class="absolute right-2 sm:right-4 top-1/2 transform -translate-y-1/2 z-10 p-2 sm:p-2.5 md:p-3 transition-all duration-300 cursor-pointer rounded-full shadow-lg hover:scale-110
                        {{ $isMetallic ? 'text-icon-high hover:text-orange-600 bg-elevation-02dp/90 hover:bg-elevation-02dp' : 'text-brand-primary hover:text-orange-600 bg-white/20 hover:bg-white/30' }}">
                        <x-lucide-chevron-right class="w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6"/>
                    </button>

                    <div
                        class="grid grid-cols-1 px-15 md:px-25 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-5 md:gap-6 lg:gap-7 xl:gap-8 min-h-[400px] sm:min-h-[450px] md:min-h-[500px] lg:min-h-[650px] w-full"
                        x-bind:class="{ 'opacity-50 scale-[0.98]': isTransitioning }"
                        style="transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); transform-origin: center;"
                        aria-roledescription="carousel"
                        aria-label="Depoimentos de clientes">
                        <template x-for="(card, index) in currentCards" :key="card.id">
                            <div
                                :class="index === activeIndexInGrid
                                    ? '{{ $cardHover }} h-fit relative px-4 sm:px-5 md:px-6 lg:px-7 xl:px-8 pt-4 sm:pt-5 md:p-6 lg:py-7 xl:py-8 pb-3 shadow-xl scale-105 z-10'
                                    : '{{ $isMetallic ? 'bg-elevation-02dp border border-outline-dark' : 'bg-outline-dark' }} h-fit min-h-[280px] sm:min-h-[300px] md:min-h-[320px] lg:min-h-[340px] xl:min-h-[330px] p-4 sm:p-5 md:p-6 lg:p-7 xl:p-8 shadow-md hover:shadow-lg hover:scale-[1.02]'"
                                class="rounded-xl space-y-4 sm:space-y-5 md:space-y-6 lg:space-y-7 xl:space-y-8 text-white w-full max-w-[280px] sm:max-w-[320px] md:max-w-[360px] lg:max-w-[400px] xl:max-w-[424px] mx-auto transition-all duration-500 ease-in-out"
                                :aria-selected="index === activeIndexInGrid ? 'true' : 'false'"
                                role="group"
                                :aria-label="`Depoimento de ${card.name}`">
                                <div class="flex flex-col gap-4 sm:gap-5 md:gap-6 lg:gap-7 xl:gap-8">
                                    <div class="flex items-center">
                                        <div
                                            class="{{ $isMetallic ? 'bg-outline-dark' : 'bg-outline-light' }} rounded-full w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 lg:w-14 lg:h-14 xl:w-16 xl:h-16 flex items-center justify-center">
                                            <img :src="card.avatar_url" alt="" class="object-cover w-full h-full rounded-full" />
                                        </div>
                                    </div>
                                    <p class="font-medium text-xs sm:text-sm md:text-base lg:text-base leading-relaxed"
                                       x-text="index === activeIndexInGrid ? (card.comment ?? card.content) : (card.comment ?? card.content).slice(0, window.innerWidth < 640 ? 60 : window.innerWidth < 768 ? 70 : window.innerWidth < 1024 ? 80 : 90) + '...'"
                                       x-bind:class="index === activeIndexInGrid
                                            ? '{{ $isMetallic ? 'text-text-dark' : 'text-text-light' }}'
                                            : 'text-text-medium'">
                                    </p>
                                </div>

                                <div class="h-px mb-3 sm:mb-4"
                                     x-bind:class="index === activeIndexInGrid ? 'bg-outline-light' : 'bg-outline-dark'">
                                </div>

                                <div class="flex justify-between items-center z-10 w-full">
                                    <div class="flex flex-col gap-1">
                                        <div class="font-bold text-lg sm:text-xl md:text-xl lg:text-2xl"
                                             x-bind:class="index === activeIndexInGrid
                                                ? '{{ $isMetallic ? 'text-text-dark' : 'text-text-light' }}'
                                                : 'text-text-high'"
                                             x-text="card.name"></div>
                                        <div class="text-xs sm:text-sm md:text-base"
                                             x-bind:class="index === activeIndexInGrid
                                                ? '{{ $isMetallic ? 'text-text-dark' : 'text-text-light' }}'
                                                : 'text-text-medium'"
                                             x-text="card.role"></div>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>

                    <!-- Pagination dots -->
                    <div class="flex justify-center mt-6 sm:mt-8 gap-2">
                        <template x-for="(_, index) in Array.from({ length: totalPages })" :key="index">
                            <button
                                @click="goToPage(index)"
                                :class="currentPage === index
                                    ? '{{ $isMetallic ? 'bg-orange-600' : 'bg-brand-primary' }} w-3 h-3 sm:w-4 sm:h-4'
                                    : '{{ $isMetallic ? 'bg-outline-dark hover:bg-outline-light' : 'bg-outline-dark hover:bg-outline-light' }} w-2 h-2 sm:w-3 sm:h-3'"
                                class="rounded-full transition-all duration-300 ease-in-out"
                                :aria-label="`Ir para página ${index + 1} de ${totalPages}`"
                                :aria-current="currentPage === index ? 'true' : 'false'">
                            </button>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
