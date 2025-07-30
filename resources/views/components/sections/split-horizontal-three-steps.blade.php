@props([
    'subheading' => 'Lorem ipsum',
    'heading' => 'Lorem Ipsum',
    'description' => 'Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia
personalizada que se adapta às suas necessidades e objetivos financeiros. Nossa abordagem é baseada em três pilares
fundamentais: Análise de Perfil, Planejamento Estratégico e Execução com Suporte Contínuo.',
    'cta_label' => 'Saiba Mais',
    'cta_url' => 'https://example.com/saiba-mais',
    'cards' => [
        [
            'title' => 'Planejamento Estratégico',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu augue erat. Duis velit eros,
suscipit at nisi vitae, faucibus hendrerit turpis. ',
        ],
        [
            'title' => 'Planejamento Estratégico',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu augue erat. Duis velit eros,
suscipit at nisi vitae, faucibus hendrerit turpis. ',
        ],
        [
            'title' => 'Code Capital',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu augue erat. Duis velit eros,
suscipit at nisi vitae, faucibus hendrerit turpis. ',
        ],
    ],
    'grid_columns' => 3,
])

@php

    $maxGridColumns = match($grid_columns) {
        1 => 'lg:grid-cols-2',
        2 => 'lg:grid-cols-2',
        default => 'lg:grid-cols-3',
    };

@endphp

<section class="mx-auto text-text-dark dark:text-text-light overflow-hidden">
    <div class="mx-auto flex flex-col container">
        <div class="flex flex-col items-center gap-y-6">
            <x-layout.shared.chip class="px-4 py-2">Escolha a Firelce</x-layout.shared.chip>
            <x-layout.shared.section-header :heading="$heading" :description="$description"/>
        </div>
        <div class="grid grid-cols-1 {{ $maxGridColumns }} gap-8  ">
            @foreach($cards as $card)
                <x-cards.card-cta
                    :title="$card['title']"
                    :description="$card['description']"
                    :cta_label="$card['cta_label'] ?? $cta_label"
                    :cta_url="$card['cta_url'] ?? $cta_url"
                />
            @endforeach
        </div>
    </div>
</section>
