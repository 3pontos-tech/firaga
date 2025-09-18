@props([
    'headline',
    'cards' => [],
    'grid_columns',
    'card_type'
])
@php
    $variant = $renderable->theme->value;

    $background = match($variant) {
        'metallic' => 'bg-[#131314] border-y border-outline-dark',
        default => '',
    };

    $maxGridColumns = match($grid_columns) {
        1 => 'lg:grid-cols-1',
        2 => 'lg:grid-cols-2',
        default => 'lg:grid-cols-3',
    };
@endphp

<section class="container mx-auto text-text-dark dark:text-text-light overflow-hidden mb-32 {{ $background }}">
    <div class="mx-auto flex flex-col container gap-y-12">
        <div class="flex flex-col items-center gap-y-6">
            <x-headline :component="$headline" />
        </div>
        <div class="grid grid-cols-1 {{ $maxGridColumns }} gap-8">
            @foreach($cards as $card)

                <x-card variant="cta" align="center" interactive="brand">
                    @if($card->icon)
                        <x-slot:icon class="text-icon-high bg-brand-primary w-16 h-16 lg:w-20 lg:h-20">
                            <x-filament::icon :icon="$card->icon"
                                              class=" w-9 h-9 group-hover/card:text-brand-primary  lg:h-11 lg:w-11"/>
                        </x-slot:icon>
                    @endif

                    @isset($card->title)
                        <x-slot:title>
                            {{ $card->title }}
                        </x-slot:title>
                    @endisset


                    @isset($card->description)
                        <x-slot:subtitle class="text-lg">
                            {{ $card->description }}
                        </x-slot:subtitle>
                    @endisset

                    <x-slot:footer class="hidden lg:block">
                        @foreach($headline->actions as $action)
                            <x-button rounded="sm" variant="white" :component="$action" />
                        @endforeach
                    </x-slot:footer>
                </x-card>

            @endforeach
        </div>
    </div>
</section>

