@props([
    'timeline'
])

<section class="py-8 sm:py-12 md:py-16">
    <div class="container grid grid-cols-3 grid-rows-3 mx-auto space-y-8 relative text-text-high">
        @foreach($timeline as $item)
            <img src="{{ asset('images/dashed-line-1.svg') }}" alt="Process Background"
                 class="absolute xl:top-[230px] xl:left-[80px] lg:top-[354px] lg:left-[50px]">
            <img src="{{ asset('images/dashed-line-1.svg') }}" alt="Process Background"
                 class="absolute 2xl:top-[615px] 2xl:left-[735px] xl:top-[649px] xl:left-[500px] lg:left-[445px] lg:top-[750px]">
            <div class="items-center space-y-4
                {{ $loop->iteration === 1 ? 'col-start-1 row-start-1' : '' }}
                {{ $loop->iteration === 2 ? 'col-start-2 row-start-2' : '' }}
                {{ $loop->iteration === 3 ? 'col-start-3 row-start-3' : '' }}">
                <div class="flex items-center gap-4">
                    <span class="bg-brand-primary text-2xl w-8 h-8 rounded-full flex items-center justify-center">
                        {{ $loop->iteration }}
                    </span>
                    <h3 class="text-xl">{{ $item['title'] }}</h3>
                </div>

                <x-card-v2 class="relative z-10 flex flex-row max-w-[650px] p-8 space-x-4 items-center">
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
            </div>
        @endforeach
    </div>
</section>
