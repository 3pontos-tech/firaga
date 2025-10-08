@props([
    'headline',
    'timeline'
])

<section class="py-8 sm:py-12 md:py-16 text-white">
    <div class="flex flex-col items-center justify-center px-2 space-y-6 text-center">
        <x-headline :component="$headline" />
    </div>
    <div class="container pt-8 grid grid-cols-1 md:grid-cols-3 md:grid-rows-3 mx-auto space-y-16 relative">
        @foreach($timeline as $item)
            <div class="relative items-center z-10 p-4 md:p-0 bg-elevation-surface space-y-4 md:col-start-1 md:row-start-1
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
                        : "after:content-[''] after:max-w-[190px] after:lg:max-w-screen after:z-0 after:rounded-bl-xl
                        after:absolute after:-z-10 after:border-dashed
                        after:md:border-b-2 after:border-l-2 after:border-outline-low after:left-1/2 after:md:left-1/10
                        after:md:top-[101%] after:w-[520px] after:h-[180px] after:top-[110%]";
                @endphp

                @if($loop->iteration === 2)
                    <div class="hidden lg:block lg:absolute top-4 -right-10 rotate-90">
                        <x-partials.corner variant="brand" class="w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] md:w-[120px] md:h-[80px]"/>
                    </div>
                @endif

                <x-card-v2 class="relative z-10 flex sm:flex-row max-w-[650px] p-8 space-x-4 sm:items-center border {{ $afterClasses }}">
                    <x-slot:icon>
                        <div class="bg-outline-dark p-4 rounded-md max-w-fit">
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
