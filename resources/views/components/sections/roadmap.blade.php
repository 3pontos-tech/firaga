@props([
    'heading',
    'subheading',
    'cta_text',
    'cta_label',
    'cta_link',
    'steps' => [],
])
@php
    $grid = [
        'col-span-7',
        'col-start-6 col-span-7',
        'col-start-10 col-span-7'
    ];
@endphp

<section class="w-full">
    <div class="container mx-auto">
        <div class="flex flex-col items-center justify-center space-y-6 text-center">
            <div class="space-y-4 max-w-5xl flex flex-col items-center justify-center">
                <x-layout.shared.section-header
                    :$heading
                    :description="$subheading"
                />
            </div>
        </div>
        <div class="hidden lg:block mx-auto py-16 relative">
            <img src="{{ asset('images/dashed-line-1.svg') }}" alt="Process Background"
                 class="absolute top-[314px] left-[80px]">
            <img src="{{ asset('images/dashed-line-2.svg') }}" alt="Process Background"
                 class="absolute top-[769px] left-[780px]">
            <div class="grid grid-cols-16 gap-4">
                @foreach($steps as $index => $card)
                    <div @class($grid[$index])>
                        <x-code-capital.partials.process-card
                            :number="$index + 1"
                            :icon="$card['icon']"
                            :tit
                            :title="$card['title']"
                            :description="$card['description']"
                            :class="$card['class']"
                        />
                    </div>
                @endforeach
            </div>
        </div>

        <div class="lg:hidden py-8 sm:py-12 md:py-16">
            <div class="flex flex-col space-y-8 sm:space-y-12">
                @foreach ($steps as $index => $card)
                    <x-code-capital.partials.process-card
                        :icon="$card['icon']"
                        :number="$index + 1"
                        :title="$card['title']" :description="$card['description']"
                        class="justify-center"/>
                @endforeach
            </div>
        </div>

        <div class="flex flex-col items-center justify-center space-y-6 text-center">
            <p class="text-text-medium max-w-3xl mx-auto text-sm sm:text-base">
                {{ $cta_text }}
            </p>
            <x-layout.shared.button :href="$cta_url" class="px-6 sm:px-8 py-3 sm:py-4 font-semibold w-full sm:w-auto">
                {{ $cta_label }}
            </x-layout.shared.button>
        </div>
    </div>
</section>
