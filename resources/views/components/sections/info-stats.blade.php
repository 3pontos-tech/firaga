@props([
    'headline',
    'metrics' => collect()
])
@php
    /** @var \App\Filament\Components\DTOs\HeadlineComponent $headline  */

@endphp


<section class="container mx-auto mb-32">
    <div class="flex flex-col lg:grid lg:grid-cols-12">
        <div class="col-span-4 px-2">
            <x-headline :component="$headline"/>
        </div>

        <div class="grid col-span-8 col-start-5 grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-4 md:gap-8">
            @foreach ($metrics as $metric)
                <x-card variant="stat" class="my-15" interactive>
                    <x-slot:icon>
                        <x-filament::icon :icon="$metric['icon']" class="h-8 w-8 text-white"/>
                    </x-slot:icon>

                    <x-slot:metric>{{ $metric['value'] }}</x-slot:metric>
                    <x-slot:subtitle>{{ $metric['label'] }}</x-slot:subtitle>
                </x-card>
            @endforeach
        </div>
    </div>

</section>
