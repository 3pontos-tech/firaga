@props([
    'headline',
    'metrics' => collect()
])
@php
    /** @var \App\Filament\Components\DTOs\HeadlineComponent $headline */
@endphp

<section class="container mx-auto">
    <div class="flex flex-col justify-between lg:grid lg:grid-cols-12">
        <div class="col-span-4 pr-4">
            <x-headline :component="$headline" class="mx-auto md:mx-0"/>
        </div>

        <!-- Infinite scroll wrapper -->
        <div class="col-span-8 overflow-hidden w-full my-auto">
            <div id="metrics" class="flex animate-infinite-scroll whitespace-nowrap gap-6">

                <!-- First set of cards -->
                @foreach(range(1,2) as $ignored)
                <div class="flex gap-6">
                    @foreach ($metrics as $metric)
                        <div class="shrink-0 w-[15rem] sm:w-[18rem]">
                            <x-card-v2 :card="$metric" text-box="mt-8 flex-col" emphasis="primary" :interactive="true" class="h-full">
                                <x-slot:title class="text-2xl!">{{ $metric->title }}</x-slot:title>
                                <x-slot:description>{{ $metric->description }}</x-slot:description>
                            </x-card-v2>
                        </div>
                    @endforeach
                </div>
                @endforeach
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
