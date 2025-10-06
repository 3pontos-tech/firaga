@props([
    'timeline'
])

<section class="py-8 sm:py-12 md:py-16 text-white">
    <div class="container mx-auto space-y-8 relative">
        <img src="{{ asset('images/dashed-line-1.svg') }}" alt="Process Background"
             class="absolute xl:top-[230px] xl:left-[80px] lg:top-[354px] lg:left-[50px]">
        <img src="{{ asset('images/dashed-line-2.svg') }}" alt="Process Background"
             class="absolute 2xl:top-[615px] 2xl:left-[735px] xl:top-[649px] xl:left-[500px] lg:left-[445px] lg:top-[750px]">
        @foreach($timeline as $item)
            <div class="flex items-center gap-4">
                <span class="bg-brand-primary text-2xl w-8 h-8 rounded-full flex items-center justify-center">
                    {{ $loop->iteration }}
                </span>
                <h3 class="text-xl">{{ $item['title'] }}</h3>
            </div>

            <x-card-v2 class="flex flex-row max-w-[650px] p-8 space-x-4 items-center">
                <x-slot:icon>
                    <div class="bg-outline-dark p-4 rounded-md">
                        <x-dynamic-component
                            :component="$item['card_icon']"
                            class="w-6 h-6"
                        />
                    </div>
                </x-slot:icon>
                <x-slot:title class="mb-2">
                    {{ $item['card_title'] }}
                </x-slot:title>
                <x-slot:description>
                    {{ $item['card_description'] }}
                </x-slot:description>
            </x-card-v2>
        @endforeach
    </div>
</section>
