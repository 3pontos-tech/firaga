@props([
    'heading',
    'description',
    'insights' => [],
    'quote',
    'cta_url',
    'cta_label',
])
<section class="py-8 sm:py-12 md:py-16 lg:py-20 xl:py-60 min-h-screen">
    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 xl:gap-16 items-center justify-between">
            <div class="w-full lg:w-1/2 xl:w-[60%] relative order-2 lg:order-2">
                <div class="aspect-square sm:aspect-[4/3] lg:aspect-square xl:aspect-[4/3] relative">
                    <img src="{{ $renderable?->getFirstMediaUrl(App\Enums\CustomComponent::SplitWithImageQuote->value) ?? asset('images/stock/our-work.png') }}" alt="Our Work"
                         class="w-full h-full object-cover rounded-lg sm:rounded-xl lg:rounded-2xl">
                    <div
                            class="absolute bottom-3 sm:bottom-4 lg:bottom-6 xl:bottom-8 left-1/2 transform -translate-x-1/2 text-white text-sm sm:text-base lg:text-lg xl:text-xl font-medium w-[85%] sm:w-[80%] lg:w-[85%] xl:w-[80%] flex flex-col sm:flex-row items-start gap-2 sm:gap-x-3 lg:gap-x-4 justify-center">
                        <img src="{{ asset('images/quote-mark.svg') }}" alt="Quote"
                            class="w-5 h-5 sm:w-6 sm:h-6 lg:w-8 lg:h-8 xl:w-10 xl:h-10 flex-shrink-0" />
                        <span class="leading-relaxed">
                            {{ $quote }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 xl:w-[40%] flex flex-col gap-y-4 sm:gap-y-6 lg:gap-y-8 order-1 lg:order-1">
                <div class="space-y-4 sm:space-y-6 lg:space-y-8">
                    <div class="space-y-3 sm:space-y-4 lg:space-y-6 flex flex-col">
                        @if($badge)
                            <x-layout.shared.chip variant="primary" class="px-4 py-2">
                                {{ $badge }}
                            </x-layout.shared.chip>
                        @endif
                        <h2 class="text-text-high font-bold text-xl sm:text-2xl lg:text-3xl xl:text-4xl leading-tight">
                            {{ $heading }}
                        </h2>
                        <p class="text-text-medium text-sm sm:text-base lg:text-lg leading-relaxed">
                            {{ $description }}
                        </p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-1 gap-3 sm:gap-4 w-full">
                        @foreach($insights as $insight)
                        <div class="flex items-start gap-x-2 sm:gap-x-3">
                            <x-lucide-check class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6 text-brand-primary flex-shrink-0 mt-0.5" />
                            <h3 class="text-text-high font-medium text-sm sm:text-base lg:text-lg">
                                {{ $insight['value'] }}
                            </h3>
                        </div>
                        @endforeach
                    </div>
                    <p class="text-text-medium text-sm sm:text-base lg:text-lg leading-relaxed">
                        Mais do que um serviço financeiro, o Key Account é uma experiência de parceria contínua. Analisamos profundamente:
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
