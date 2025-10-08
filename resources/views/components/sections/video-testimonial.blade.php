@props([
    'headline',
    'name' => 'Danilo Fernandes',
    'role' => 'Programador e Cliente Fire|ce',
    'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ?si=O6_xTlMmOrEmpqyy',
    'insights' => [],
    'video_cards' => []
])

<section class="py-8 sm:py-12 md:py-16 text-white">
    <div class="container mx-auto">
        <div class="flex flex-col lg:grid gap-8 lg:gap-12 lg:grid-cols-16">
            <div class="flex flex-col justify-between space-y-6 sm:space-y-8 lg:col-span-8 lg:col-start-9">
                <div class="flex flex-col items-center justify-center space-y-6 text-center">
                    <x-headline class="lg:text-start" :component="$headline" />
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6 w-full">
                    @foreach($insights as $insight)
                        <x-card-v2 class="flex flex-col gap-y-3 sm:gap-y-4 h-full">
                            <x-slot:icon>
                                <x-filament::icon :icon="$insight['icon']" class="w-5 h-5 sm:w-6 sm:h-6 text-brand-primary"/>
                            </x-slot:icon>
                            <x-slot:title>
                                {{ $insight['value'] }}
                            </x-slot:title>
                        </x-card-v2>
                    @endforeach
                </div>
                @if($cta_label)
                    <div class="flex flex-col sm:flex-row gap-4 sm:gap-x-6 lg:gap-x-8">
                        <x-layout.shared.button :href="$cta_url" variant="primary" class="px-6 sm:px-8 py-3 sm:py-4 w-full sm:w-auto">
                            {{ $cta_label }}
                        </x-layout.shared.button>
                    </div>
                @endif
            </div>

            <div class="flex flex-col items-center rounded-xl col-span-8 xl:col-span-7 gap-y-6 sm:gap-y-8 lg:col-start-1 lg:row-start-1">
                <iframe class="h-full w-full aspect-video" src="{{ $video_url }}" title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6 w-full">
                    @foreach($video_cards as $card)
                        <x-card-v2 :card="$card" class="h-full gap-y-2 sm:gap-y-3 rounded-lg max-w-none">
                            <x-slot:title class="!text-2xl mb-2">
                                {{ $card['title'] }}
                            </x-slot:title>
                            <x-slot:description>{{ $card['value'] }}</x-slot:description>
                        </x-card-v2>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
