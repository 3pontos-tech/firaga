@props(['cards' => []])

<section class="bg-base-200/80 ">
    <div class="py-12 md:py-24 mx-auto flex flex-col gap-y-8 md:gap-y-11">
        <div class="px-4 md:px-8" style="opacity: 1; transform: none; will-change: opacity, transform;">
            <h2 class="text-text-high text-3xl md:text-4xl lg:text-5xl font-bold">Escute de nossos clientes</h2>
        </div>
        <div class="rounded-2xl w-full">
            <!-- TODO: Add animation to the cards -->
            <div x-data="{
                active: 0,
                cards: {{ json_encode($cards) }},
                get cardsPerView() {
                    if (window.innerWidth >= 1024) return 4; // lg: 4 cards
                    if (window.innerWidth >= 768) return 2;  // md: 2 cards
                    return 1; // mobile: 1 card
                },
                get currentCards() {
                    let cardsToShow = this.cardsPerView;
                    let startIndex = Math.floor(this.active / cardsToShow) * cardsToShow;
                    return this.cards.slice(startIndex, startIndex + cardsToShow);
                },
                get activeIndexInGrid() {
                    return this.active % this.cardsPerView;
                },
                next() {
                    this.active = (this.active + 1) % this.cards.length;
                },
                prev() {
                    this.active = (this.active - 1 + this.cards.length) % this.cards.length;
                }
            }"
            x-init="
                window.addEventListener('resize', () => { $nextTick(() => {}) });
            "
            class="w-full px-4 md:px-6">
                <div class="relative overflow-hidden w-full">
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 lg:gap-8 min-h-[400px] md:min-h-[500px] lg:h-[600px]">
                        <template x-for="(card, index) in currentCards" :key="card.id">
                            <div x-bind:class="index === activeIndexInGrid ? 'bg-brand-primary h-fit relative px-4 md:px-6 lg:px-8 pt-6 md:pt-8 pb-3' : 'bg-outline-dark h-[320px] md:h-[340px] p-4 md:p-6 lg:p-8'"
                                class="rounded-xl space-y-6 md:space-y-8 text-white w-full max-w-[424px] mx-auto">
                                <div class="flex flex-col gap-6 md:gap-8">
                                    <div class="flex items-center">
                                        <div class="rounded-full w-12 h-12 md:w-16 md:h-16 bg-outline-light flex items-center justify-center">
                                        </div>
                                    </div>
                                    <p class="font-medium text-sm md:text-base"
                                        x-text="index === activeIndexInGrid ? card.content : card.content.slice(0, window.innerWidth < 768 ? 80 : 50) + '...'"
                                        x-bind:class="index === activeIndexInGrid ? 'text-text-light' : 'text-text-medium'">
                                    </p>
                                </div>
                                <div class="h-px mb-4"
                                    x-bind:class="index === activeIndexInGrid ? 'bg-outline-light' : 'bg-outline-dark'">
                                </div>
                                <div class="flex justify-between items-center z-10 w-full">
                                    <div class="flex flex-col gap-1">
                                        <div class="font-bold text-text-light text-xl md:text-2xl" x-text="card.name"></div>
                                        <div class="text-sm md:text-base" x-bind:class="index === activeIndexInGrid ? 'text-text-light' : 'text-text-medium'"
                                            x-text="card.role"></div>
                                    </div>
                                    <div>
                                        <x-lucide-chevron-right class="w-5 h-5 md:w-6 md:h-6 text-brand-primary"
                                            x-bind:class="index === activeIndexInGrid && 'hidden'" />
                                    </div>
                                </div>
                                <div class="absolute bottom-[-20px] md:bottom-[-25px] left-0 w-full h-fit pointer-events-none"
                                    x-bind:class="index === activeIndexInGrid ? 'block' : 'hidden'">
                                    <svg class="w-full h-auto" viewBox="0 0 424 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 31.9738C0 41.5632 8.37722 48.9988 17.8988 47.8608L140.796 33.1723C188.097 27.519 235.903 27.519 283.204 33.1723L406.101 47.8608C415.623 48.9988 424 41.5632 424 31.9738V16C424 7.16344 416.837 -1.07288e-06 408 -1.07288e-06H16C7.16343 -1.07288e-06 0 7.16344 0 16V31.9738Z"
                                            fill="#E2410A" />
                                    </svg>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>

                <div class="flex justify-center md:justify-start gap-2 mt-6 md:mt-8">
                    <button @click="prev()"
                        class="p-2 md:p-3 text-text-medium hover:text-text-high transition-colors cursor-pointer bg-white/10 hover:bg-white/20 rounded-full">
                        <x-lucide-chevron-left class="w-5 h-5 md:w-6 md:h-6" />
                    </button>
                    <button @click="next()"
                        class="p-2 md:p-3 text-brand-primary hover:text-orange-600 transition-colors cursor-pointer bg-white/10 hover:bg-white/20 rounded-full">
                        <x-lucide-chevron-right class="w-5 h-5 md:w-6 md:h-6" />
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
