@props([
    'headline',
    'insights' => [],
    'quote',
    'cta_url',
    'cta_label',
    'image_position',
    'end_description' => '',
])

@php
    $imagePos = $image_position === 'left' ? 'order-1 lg:order-1' : 'order-1 lg:order-2';
    $contentPos = $image_position === 'left' ? 'order-1 lg:order-2' : 'order-2 lg:order-1';
    $variant = $renderable?->theme->value;
@endphp


<section class="py-8 sm:py-12 md:py-16 lg:py-20 xl:py-60">
    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 xl:gap-16">
            <div class="w-full lg:w-1/2 xl:w-[40%] relative {{ $imagePos }}">
                <div class="hidden lg:block h-full relative">
                    <img
                        src="{{ $renderable?->getFirstMediaUrl(App\Enums\CustomComponent::SplitWithImageQuote->value) ?? asset('images/stock/our-work.png') }}"
                        alt="Our Work"
                        class="w-full h-full object-cover rounded-lg sm:rounded-xl lg:rounded-2xl">
                    <div
                        class="absolute bottom-3 sm:bottom-4 lg:bottom-6 xl:bottom-8 left-1/2 transform -translate-x-1/2 text-white text-sm sm:text-base lg:text-lg xl:text-xl font-medium w-[85%] sm:w-[80%] lg:w-[85%] xl:w-[80%] flex flex-col sm:flex-row items-start gap-2 sm:gap-x-3 lg:gap-x-4 justify-center">
                        <img src="{{ asset('images/quote-mark.svg') }}" alt="Quote"
                             class="w-5 h-5 sm:w-6 sm:h-6 lg:w-8 lg:h-8 xl:w-10 xl:h-10 flex-shrink-0"/>
                        <span class="leading-relaxed">
                            {{ $quote }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 xl:w-[55%] flex flex-col gap-y-4 sm:gap-y-6 lg:gap-y-8 justify-center {{ $contentPos }}">
                <div class="space-y-4 sm:space-y-6 lg:space-y-8">
                    <div class="flex flex-col items-center justify-center space-y-6 text-center">
                        <x-headline class="lg:text-start" :component="$headline" />
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 gap-8 w-full">
                        @foreach($insights as $insight)
                            <x-card-v2 text-align="items-center text-center sm:items-start sm:text-left"
                                       class="flex h-full sm:flex-row lg:flex-col gap-4 items-center md:items-start">
                                <x-slot:icon>
                                    <div class="bg-brand-primary p-4 rounded-md max-w-fit">
                                        <x-dynamic-component
                                            :component="$insight['icon']"
                                            class="w-6 h-6 text-white"
                                        />
                                    </div>
                                </x-slot:icon>
                                <x-slot:title class="mb-2">
                                    {{ $insight['title'] }}
                                </x-slot:title>
                                <x-slot:description>
                                    {{ $insight['description'] }}
                                </x-slot:description>
                            </x-card-v2>
                        @endforeach
                    </div>

                    @if(!empty($end_description))
                        <p class="text-text-medium text-sm sm:text-base lg:text-lg leading-relaxed">
                            {{ $end_description }}
                        </p>
                    @endif

                    @if(!empty($cta_label))
                        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 lg:gap-6">
                            <x-layout.shared.button :$variant :href="$cta_url"
                                                    class="w-full sm:w-auto px-4 py-2 sm:px-6 sm:py-3 lg:px-8 lg:py-4 font-bold text-xs sm:text-sm lg:text-base">
                                {{ $cta_label }}
                            </x-layout.shared.button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
