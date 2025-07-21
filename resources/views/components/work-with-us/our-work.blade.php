<section class="py-8 sm:py-12 md:py-16 lg:py-20 xl:py-60 min-h-screen">
    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 xl:gap-16 items-center justify-between">
            <div class="w-full lg:w-1/2 xl:w-[60%] relative order-2 lg:order-2">
                <div class="aspect-square sm:aspect-[4/3] lg:aspect-square xl:aspect-[4/3] relative">
                    <img src="{{ asset('images/stock/our-work-work-with-us.png') }}" alt="Our Work"
                        class="w-full h-full object-cover rounded-lg">
                </div>
            </div>
            <div class="w-full lg:w-1/2 xl:w-[40%] flex flex-col gap-y-4 sm:gap-y-6 lg:gap-y-8 order-1 lg:order-1">
                <div class="space-y-4 sm:space-y-6 lg:space-y-8">
                    <div class="space-y-3 sm:space-y-4 lg:space-y-6 flex flex-col">
                        <x-layout.shared.chip variant="primary" class="px-4 py-2">Por que escolher a Code
                            Capital?</x-layout.shared.chip>
                        <h2 class="text-text-high font-bold text-xl sm:text-2xl lg:text-3xl xl:text-4xl leading-tight">
                            Nosso Trabalho
                        </h2>
                    </div>
                    <p class="text-text-medium text-sm sm:text-base lg:text-lg leading-relaxed">
                        Mais do que um serviço financeiro, o Key Account é uma experiência de parceria contínua.
                        Analisamos profundamente:
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 lg:gap-6">
                        <x-layout.shared.button variant="primary"
                            class="w-full sm:w-auto px-4 py-2 sm:px-6 sm:py-3 lg:px-8 lg:py-4 font-bold text-xs sm:text-sm lg:text-base">
                            Agende uma consultoria gratuita
                        </x-layout.shared.button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
