@props([
    'subheading' => 'Lorem ipsum',
    'heading' => 'Lorem Ipsum',
    'description' => 'Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia
personalizada que se adapta às suas necessidades e objetivos financeiros. Nossa abordagem é baseada em três pilares
fundamentais: Análise de Perfil, Planejamento Estratégico e Execução com Suporte Contínuo.',
    'cta_label' => 'Saiba Mais',
    'cta_link' => 'https://example.com/saiba-mais',
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
])

<section class="mx-auto text-text-dark dark:text-text-light overflow-hidden">
    <div class="mx-auto px-16 flex flex-col ">
        <div class="flex flex-col items-center gap-y-6">
            <x-layout.shared.chip>Escolha a Firelce</x-layout.shared.chip>
            <x-landing.section-header :heading="$heading" :description="$description" />
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <x-landing.card-cta :title="$cards[0]['title']" :description="$cards[0]['description']" />
            <x-landing.card-cta :title="$cards[1]['title']" :description="$cards[1]['description']" />
            <x-landing.card-cta :title="$cards[2]['title']" :description="$cards[2]['description']" :hasCTAButton="true" :cta_label="$cta_label"
                :cta_link="$cta_link" />
        </div>
    </div>
    </div>
</section>
