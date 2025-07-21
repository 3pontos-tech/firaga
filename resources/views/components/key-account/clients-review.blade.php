@props(['cards' => []])

<section class="bg-elevation-02dp border-y border-outline-dark">
    <div
        class="py-12 sm:py-16 md:py-20 lg:py-24 mx-auto flex flex-col container px-4 sm:px-6 lg:px-8">
        <div class="w-full" style="opacity: 1; transform: none; will-change: opacity, transform;">
            <x-layout.shared.chip variant="metalic" class="px-4 py-2">
                Avaliações
            </x-layout.shared.chip>
            <h2 class="text-text-high text-xl sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl font-bold leading-tight mt-4">
                Escute de nossos clientes</h2>
        </div>
        <div class="rounded-2xl w-full">
            <div x-data="{
                active: 0,
                cards: {{ json_encode($cards) }},
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
                next() {
                    this.active = (this.active + 1) % this.cards.length;
                },
                prev() {
                    this.active = (this.active - 1 + this.cards.length) % this.cards.length;
                }
            }" x-init="window.addEventListener('resize', () => { $nextTick(() => {}) });" class="w-full">
                <div class="relative overflow-hidden w-full">
                    <div
                        class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-5 md:gap-6 lg:gap-7 xl:gap-8 w-full min-h-[350px] sm:min-h-[400px] md:min-h-[600px] lg:min-h-[500px] xl:min-h-[500] items-end">
                        <template x-for="(card, index) in currentCards" :key="card.id">
                            <div x-bind:class="index === activeIndexInGrid ?
                                'bg-gradient-to-r from-[#D6D6D6] via-[#FFFFFF] to-[#D6D6D6] h-fit relative px-4 sm:px-5 md:px-6 lg:px-7 xl:px-8 pt-4 sm:py-5 md:py-6 lg:py-7 xl:py-8' :
                                'bg-elevation-02dp border border-outline-dark h-[280px] sm:h-[300px] md:h-[320px] lg:h-[340px] xl:h-[360px] p-4 sm:p-5 md:p-6 lg:p-7 xl:p-8'"
                                class="rounded-xl space-y-4 sm:space-y-5 md:space-y-6 lg:space-y-7 xl:space-y-8 text-white w-full max-w-[280px] sm:max-w-[320px] md:max-w-[360px] lg:max-w-[400px] xl:max-w-[424px] mx-auto">
                                <div class="flex flex-col gap-4 sm:gap-5 md:gap-6 lg:gap-7 xl:gap-8">
                                    <div class="flex items-center">
                                        <div
                                            class="rounded-full w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 lg:w-14 lg:h-14 xl:w-16 xl:h-16 bg-outline-dark flex items-center justify-center">
                                        </div>
                                    </div>
                                    <p class="font-medium text-xs sm:text-sm md:text-base lg:text-base leading-relaxed"
                                        x-text="index === activeIndexInGrid ? card.content : card.content.slice(0, window.innerWidth < 640 ? 60 : window.innerWidth < 768 ? 70 : window.innerWidth < 1024 ? 80 : 90) + '...'"
                                        x-bind:class="index === activeIndexInGrid ? 'text-text-dark' : 'text-text-medium'">
                                    </p>
                                </div>
                                <div class="h-px mb-3 sm:mb-4"
                                    x-bind:class="index === activeIndexInGrid ? 'bg-outline-light' : 'bg-outline-dark'">
                                </div>
                                <div class="flex justify-between items-center z-10 w-full">
                                    <div class="flex flex-col gap-1">
                                            <div x-bind:class="index === activeIndexInGrid ? 'text-text-dark' : 'text-text-high'" class="font-bold text-lg sm:text-xl md:text-xl lg:text-2xl"
                                            x-text="card.name"></div>
                                        <div class="text-xs sm:text-sm md:text-base"
                                            x-bind:class="index === activeIndexInGrid ? 'text-text-dark' : 'text-text-medium'"
                                            x-text="card.role"></div>
                                    </div>
                                    <div>
                                        <x-lucide-chevron-right
                                            class="w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6 text-icon-high"
                                            x-bind:class="index === activeIndexInGrid && 'hidden'" />
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>

                <div class="flex justify-center sm:justify-center md:justify-start  mt-6 sm:mt-7 md:mt-8">
                    <button @click="prev()"
                        class="p-2 sm:p-2.5 md:p-3 text-icon-low hover:text-text-high transition-colors cursor-pointer">
                        <x-lucide-chevron-left class="w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6" />
                    </button>
                    <button @click="next()"
                        class="p-2 sm:p-2.5 md:p-3 text-icon-high hover:text-orange-600 transition-colors cursor-pointer">
                        <x-lucide-chevron-right class="w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6" />
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
