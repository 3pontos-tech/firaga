@props([
    'headline',
    'metrics' => collect()
])
@php
    /** @var \App\Filament\Components\DTOs\HeadlineComponent $headline */
@endphp

<section class="container mx-auto">
    <div class="flex flex-col justify-between lg:grid lg:grid-cols-12">
        <div class="col-span-4">
            <x-headline :component="$headline" class="mx-auto md:mx-0"/>
        </div>

        <!-- Infinite scroll wrapper -->
        <div class="col-span-8 overflow-hidden w-full">
            <div id="metrics" class="flex animate-infinite-scroll whitespace-nowrap gap-6">

                <!-- First set of cards -->
                <div class="flex gap-6">
                    @foreach ($metrics as $metric)
                        <div class="shrink-0 w-[15rem] sm:w-[18rem]">
                            <x-card variant="stat" emphasis="primary" :interactive="true" class="h-full">
                                <x-slot:icon>
                                    <x-filament::icon :icon="$metric['icon']"/>
                                </x-slot:icon>
                                <x-slot:metric>{{ $metric['value'] }}</x-slot:metric>
                                <x-slot:subtitle>{{ $metric['label'] }}</x-slot:subtitle>
                            </x-card>
                        </div>
                    @endforeach
                </div>

                <!-- Duplicate set of cards -->
                <div class="flex gap-6">
                    @foreach ($metrics as $metric)
                        <div class="shrink-0 w-[15rem] sm:w-[18rem]">
                            <x-card variant="stat" emphasis="primary" :interactive="true" class="h-full">
                                <x-slot:icon>
                                    <x-filament::icon :icon="$metric['icon']"/>
                                </x-slot:icon>
                                <x-slot:metric>{{ $metric['value'] }}</x-slot:metric>
                                <x-slot:subtitle>{{ $metric['label'] }}</x-slot:subtitle>
                            </x-card>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    <!-- Optional: Hide scrollbars (if animation fails or fallback used) -->
    <style>
        #metrics::-webkit-scrollbar {
            display: none;
        }

        @keyframes infinite-scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        .animate-infinite-scroll {
            animation: infinite-scroll 30s linear infinite;
        }

        .animate-infinite-scroll:hover {
            animation-play-state: paused;
        }
    </style>
</section>
