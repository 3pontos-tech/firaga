@props([
    'heading',
    'description',
    'cta_label',
    'cta_url',
    'image',
])

<div class="container mx-auto px-4 md:px-6">
    <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center gap-8 lg:gap-12">
        <div class="w-full lg:w-1/2 order-2 lg:order-1 hidden lg:block">
            <img src="{{ asset('images/stock/consultant.png') }}" alt="Consultant" class="w-full max-w-[696px] h-auto lg:h-[718px] object-cover rounded-lg">
        </div>
        <div class="w-full lg:w-1/2 relative flex flex-col gap-y-6 sm:gap-y-8 md:gap-y-10 order-1 lg:order-2">
            <div class="absolute top-[-30px] left-[-30px] sm:top-[-40px] sm:left-[-40px] md:top-[-55px] md:left-[-55px] hidden sm:block">
                <img src="{{ asset('images/border-corner-orange.svg') }}" alt="Border Corner" class="w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] md:w-[100px] md:h-[100px]">
            </div>
            <h2 class="text-text-high font-bold text-2xl sm:text-3xl md:text-4xl lg:text-5xl leading-tight">
                {{ $heading }}
            </h2>
            <p class="text-text-medium text-base sm:text-lg md:text-xl leading-relaxed">
                {{ $description }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 sm:gap-x-4">
                <x-layout.shared.button :href="$cta_url" class="bg-brand-primary text-white p-3 sm:p-4 w-full sm:w-auto">
                    {{ $cta_label }}
                </x-layout.shared.button>
            </div>
        </div>
    </div>
</div>
