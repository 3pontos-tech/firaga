@props([
    'title' => 'Acesse nosso blog para ter acesso as melhores métricas',
    'description' => 'Nosso blog é o lugar ideal para quem busca conhecimento e insights para tomar decisões financeiras mais inteligentes.',
    'cta_label' => 'Acessar blog',
    'cta_url' => "#",
    'icon' => 'heroicon-o-newspaper',
])

<section
    class="text-base-content sm:py-8 md:py-10 lg:py-14 xl:py-16 overflow-hidden bg-elevation-surface container mx-auto">
    <div class="bg-elevation-02dp rounded-2xl sm:rounded-3xl p-4 sm:p-6 md:p-8 lg:p-10">
        <div
            class="flex flex-col lg:flex-row items-center justify-between gap-8 sm:gap-8 md:gap-12 lg:gap-16 xl:gap-20
                px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16 py-6 sm:py-8 lg:py-12 xl:py-16">
            <div class="relative">
                <span
                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2
                           w-[calc(100%)] h-[calc(100%)]
                           bg-brand-primary rotate-45 rounded-md z-0">
                    </span>
                <span class="relative block bg-outline-low p-4 rounded-md max-w-fit z-2">
                    <x-filament::icon :$icon alt="Blog Icon"
                         class="w-12 h-12 sm:w-16 sm:h-16 md:w-18 md:h-18 lg:w-20 lg:h-20 text-text-high"/>
                </span>
            </div>
            <div class="flex-1 text-center lg:text-left mb-6 lg:mb-0 px-2 sm:px-0 order-2 lg:order-2">
                <h3 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl text-text-high
                    font-extrabold mb-3 sm:mb-4 leading-tight">
                    {{ $title }}
                </h3>
                <p class="text-text-medium text-sm sm:text-base md:text-lg lg:text-xl leading-[150%] max-w-2xl mx-auto lg:mx-0">
                    {{ $description }}
                </p>
            </div>
            <div class="order-3 lg:order-3 w-full sm:w-auto">
                <x-layout.shared.button
                    class="p-3 sm:p-4 text-sm sm:text-base whitespace-nowrap w-full sm:w-auto"
                    href="{{ $cta_url }}"
                    variant="primary"
                >
                    {{ $cta_label }}
                </x-layout.shared.button>
            </div>
        </div>
    </div>
</section>
