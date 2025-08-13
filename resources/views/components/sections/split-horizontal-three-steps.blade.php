@props([
    'subheading',
    'heading',
    'description',
    'cta_label',
    'cta_url',
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

<section class="mx-auto text-text-dark dark:text-text-light overflow-hidden mb-32 {{ $background }}">
    <div class="mx-auto flex flex-col container gap-y-12">
        <div class="flex flex-col items-center gap-y-6">
            <x-layout.shared.chip
                :variant="$variant"
                class="px-4 py-2"> {{ $badge }}
            </x-layout.shared.chip>
            <x-layout.shared.section-header :heading="$heading" :description="$description"/>
        </div>
        <div class="grid grid-cols-1 {{ $maxGridColumns }} gap-8">
            @foreach($cards as $card)
                <x-card variant="cta" align="center" interactive="brand">
                    @if($card['icon'])
                        <x-slot:icon class="text-icon-high bg-brand-primary w-16 h-16 lg:w-20 lg:h-20">
                            <x-filament::icon icon="heroicon-o-banknotes"
                                              class=" w-9 h-9 group-hover/card:text-brand-primary  lg:h-11 lg:w-11"/>
                        </x-slot:icon>
                    @endif

                    @isset($card['title'])
                        <x-slot:title>
                            {{ $card['title'] }}
                        </x-slot:title>
                    @endisset


                    @isset($card['description'])
                        <x-slot:subtitle class="text-lg">
                            {{ $card['description'] }}
                        </x-slot:subtitle>
                    @endisset

                    @if(isset($card['cta_label']) && isset($card['cta_url']))
                        <x-slot:footer class="hidden lg:block">
                            <x-button :href="$card['cta_url']" variant="secondary"  :block="true">
                                {{ $card['cta_label'] }}
                                <x-slot:trailing>
                                    <x-filament::icon icon="heroicon-o-chevron-right" />
                                </x-slot:trailing>
                            </x-button>

                        </x-slot:footer>
                    @endif
                </x-card>

            @endforeach
        </div>
    </div>
</section>

