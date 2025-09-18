@props([
    'headline',
    'cta_label',
    'cta_url',
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
            <x-headline :component="$headline" />
        </div>
        <div class="hidden lg:block mx-auto py-16 relative">
            <img src="{{ asset('images/dashed-line-1.svg') }}" alt="Process Background"
                 class="absolute xl:top-[230px] xl:left-[80px] lg:top-[354px] lg:left-[50px]">
            <img src="{{ asset('images/dashed-line-2.svg') }}" alt="Process Background"
                 class="absolute 2xl:top-[615px] 2xl:left-[735px] xl:top-[649px] xl:left-[500px] lg:left-[445px] lg:top-[750px]">
            <div class="grid grid-cols-16 gap-4">
                @foreach($steps as $index => $card)
                    <div>
                        <x-cards.process-card
                            :number="$index + 1"
                            :icon="$card['icon']"
                            :title="$card['title']"
                            :description="$card['description']"
                            :cta_label="$card['cta_label'] ?? null"
                            :cta_url="$card['cta_url'] ?? null"
                        />
                    </div>
                @endforeach
            </div>
        </div>

        <div class="lg:hidden py-8 sm:py-12 md:py-16">
            <div class="flex flex-col space-y-8 sm:space-y-12">
                @foreach ($steps as $index => $card)
                    <x-cards.process-card
                        :icon="$card['icon']"
                        :number="$index + 1"
                        :title="$card['title']" :description="$card['description']"
                        class="justify-center"/>
                @endforeach
            </div>
        </div>


    </div>
</section>
