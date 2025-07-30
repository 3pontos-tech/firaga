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
            'title' => 'Seja um parceiro',
            'description' => 'Seja para trabalhar lado a lado da gente, gostamos de pessoas muito dispostas e motivadas. Nenhuma ideia é ignorada aqui, amamos fazer negócio e o mais importante amamos pessoas que amam fazer negócios de alto impacto.',
        ],
        [
            'title' => 'Faça parte do time',
            'description' => 'Plano de Carreira, estudo, idependencia financeira, e crescimento pessoal, todas essas são vertentes a qual baseamos nossa cultura e filosofia, gostou? Preencha o formulário e venha nos conhecer, iremos amar conhecer você também. ',
        ],
    ],
])

<section class="mx-auto text-text-dark dark:text-text-light overflow-hidden">
    <div class="mx-auto flex flex-col container">
        <div class="flex flex-col items-center gap-y-6">
            <x-layout.shared.chip class="px-4 py-2">Escolha a Firelce</x-layout.shared.chip>
            <x-layout.shared.section-header :heading="$heading" :description="$description"/>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8  ">
            @foreach($cards as $card)
                <x-cards.card-cta
                    :title="$card['title']"
                    :description="$card['description']"
                    :cta_label="$cta_label"
                />
            @endforeach
        </div>
    </div>
</section>
