@props([
    'headline',
    'cards'
])

<section>
    <div class="py-12 sm:py-16 md:py-20 lg:py-24 mx-auto flex flex-col items-center ">
        <div>
            <x-headline :component="$headline" />
        </div>
        <div class="overflow-hidden w-full my-auto">
            <div class="mx-4 sm:mx-5 flex animate-infinite-scroll whitespace-nowrap gap-6 lg:animate-none rounded-xl sm:rounded-2xl">
                @foreach(range(1,2) as $idx)
                    <div class="flex {{ $idx == 2 ? 'lg:hidden' : 'lg:grid' }} mx-auto lg:grid-cols-5 lg:min-w-[300px] gap-4 sm:gap-6 md:gap-8 min-h-[240px] items-end">
                        @foreach($cards as $card)
                            <x-card-v2
                                    :$card
                                    class="min-w-[250px] animate-pulse hover:animate-none"
                                    text-box="mt-2 gap-2 flex-col transition-discrete! duration-400 ease-in-out" emphasis="primary" :interactive="true"
                            >
                                <x-slot:title class="text-3xl! ">{{ $card->title }}</x-slot:title>
                                <x-slot:description>{{ $card->description }}</x-slot:description>
                                <x-slot:actions class="hidden transition ease-in-out group-hover/card:flex">
                                    @foreach($card->actions as $action)
                                        <div class="flex flex-row items-center gap-2">
                                            <a href="{{ $action->url }}">{{ $action->label }}</a>
                                            <x-filament::icon icon="heroicon-o-chevron-right" class="w-4 h-4" ></x-filament::icon>
                                        </div>
                                    @endforeach
                                </x-slot:actions>
                            </x-card-v2>
                        @endforeach

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@section('styles')
    <script>
        alert(1)
    </script>
@endsection
