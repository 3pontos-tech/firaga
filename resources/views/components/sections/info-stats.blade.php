@props([
    'heading',
    'subheading',
    'badge',
    'cta_label',
    'cta_url',
    'metrics' => collect()
])

<section class="container mx-auto">
    <div class="grid grid-cols-12">

        <div id="left-info" class="col-span-4">
            <x-headline class="">
                <x-slot:badge>
                    <x-badge>
                        <x-slot:icon>
                            <x-heroicon-o-fire class="w-5 h-5 mr-2"/>
                        </x-slot:icon>
                        Invista com a Firece
                    </x-badge>
                </x-slot:badge>

                <x-slot:headline class="text-3xl">
                    Invista agora com a Fire|ce
                </x-slot:headline>

                <x-slot:description>
                    Comece hoje a construir seu plano financeiro com acompanhamento de especialistas.
                </x-slot:description>

            </x-headline>

        </div>

        <div id="right"
             class="grid col-span-8 col-start-5 grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-4 md:gap-8">
            @foreach ($metrics as $metric)
                <x-cards.card variant="stat" interactive>
                    <x-slot:icon class="">
                        {{-- your trend icon --}}
                        <x-filament::icon icon="heroicon-o-banknotes" class="h-8 w-8 text-white"/>
                    </x-slot:icon>

                    <x-slot:metric>+300%</x-slot:metric>
                    <x-slot:subtitle>Crescimento anual</x-slot:subtitle>
                </x-cards.card>

            @endforeach
        </div>
    </div>

</section>
