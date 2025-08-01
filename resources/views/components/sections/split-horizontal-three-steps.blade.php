@props([
    'subheading' => 'Lorem ipsum',
    'heading' => 'Lorem Ipsum',
    'description' => 'Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia
personalizada que se adapta às suas necessidades e objetivos financeiros. Nossa abordagem é baseada em três pilares
fundamentais: Análise de Perfil, Planejamento Estratégico e Execução com Suporte Contínuo.',
    'cta_label' => 'Saiba Mais',
    'cta_url' => 'https://example.com/saiba-mais',
    'cards' => [],
    'grid_columns' => 3,
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

<section class="mx-auto text-text-dark dark:text-text-light overflow-hidden py-12 {{ $background }}">
    <div class="mx-auto flex flex-col container">
        <div class="flex flex-col items-center gap-y-6">
            <x-layout.shared.chip
                    :variant="$variant"
                    class="px-4 py-2"> {{ $badge }}
            </x-layout.shared.chip>
            <x-layout.shared.section-header :heading="$heading" :description="$description"/>
        </div>
        <div class="grid grid-cols-1 {{ $maxGridColumns }} gap-8  ">
            @foreach($cards as $card)
                @if($card_type === 'cta')
                    <x-cards.card-cta
                            :icon="$card['icon']"
                            :title="$card['title']"
                            :description="$card['description']"
                            :cta_label="$card['cta_label'] ?? $cta_label"
                            :cta_url="$card['cta_url'] ?? $cta_url"
                    />
                @else
                    <x-layout.shared.card
                            :$variant
                            :title="$card['title']"
                            :description="$card['description']"
                    >
                        <x-slot name="icon">
                            <x-filament::icon :icon="$card['icon']" class="w-8 h-8 text-white group-hover:text-icon-dark"/>
                        </x-slot>
                    </x-layout.shared.card>
                @endif
            @endforeach
        </div>
    </div>
</section>
