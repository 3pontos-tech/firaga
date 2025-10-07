@props([
    'timeline'
])

<section class="py-8 sm:py-12 md:py-16 text-white">
    <div class="container grid grid-cols-1 md:grid-cols-3 md:grid-rows-3 mx-auto space-y-16 relative">
        @foreach($timeline as $item)
            <div class="items-center space-y-4 bg-elevation-surface md:col-start-1 md:row-start-1
            {{ $loop->iteration === 2 ? 'md:col-start-2 md:row-start-2' : '' }}
            {{ $loop->iteration === 3 ? 'md:col-start-3 md:row-start-3' : '' }}">
                <div class="flex items-center gap-4">
                    <span class="bg-brand-primary text-2xl w-8 h-8 rounded-full flex items-center justify-center">
                        {{ $loop->iteration }}
                    </span>
                    <h3 class="text-xl">{{ $item['title'] }}</h3>
                </div>

                @php
                    $afterClasses = $loop->last
                        ? 'after:content-none'
                        : "after:content-[''] after:block after:absolute after:-z-10 after:border-dashed
                        after:md:border-b-2 after:border-l-2 after:border-text-medium after:left-1/2 after:md:left-1/10 after:top-[100%]
                        after:w-[520px] after:h-[200px]";
                @endphp

                <x-card-v2 class="relative z-10 flex flex-row max-w-[650px] p-8 space-x-4 md:items-center border {{ $afterClasses }}">
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
