@props([
    'subheading' => 'Nosso Trabalho',
    'heading' => 'Transformando desafios em oportunidades',
    'description' => 'Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia personalizada que se adapta às suas necessidades e objetivos financeiros. Nossa abordagem é baseada em três pilares fundamentais: Análise de Perfil, Planejamento Estratégico e Execução com Suporte Contínuo.',
    'cta_label' => 'Saiba Mais',
    'cta_link' => 'https://example.com/saiba-mais',
    'cards' => [
        [
            'title' => 'Análise de Perfil',
            'description' => 'Entendemos seu perfil financeiro e objetivos.',
        ],
        [
            'title' => 'Planejamento Estratégico',
            'description' => 'Criamos um plano personalizado para você.',
        ],
        [
            'title' => 'Execução e Suporte',
            'description' => 'Acompanhamos a execução do plano com suporte contínuo.',
        ],
    ],
])

<!-- "Nosso Atendimento" Section -->
<section id="nosso-atendimento"
         class="mx-auto bg-linear-to-br from-elevation-02dp via-elevation-03dp to-elevation-02dp text-text-dark dark:text-text-light py-28 overflow-hidden">
    <div class="mx-auto px-16  lg:flex lg:items-center lg:justify-between lg:space-x-12 relative z-10">
        <!-- Coluna da Esquerda -->
        <div class="lg:w-1/2 mb-12 lg:mb-0">
            <!-- Small Label -->
            <div
                class="inline-block bg-base-200 backdrop-blur-xl px-4 py-1 rounded-md mb-4 shadow border border-primary fadeIn">
                <span class="text-sm text-primary font-semibold">{{ $subheading }}</span>
            </div>
            <!-- Main Heading -->
            <h2 class="text-text-dark dark:text-text-light font-bold text-4xl sm:text-5xl  leading-tight mb-6 tracking-tight">
                {{ $heading }}
            </h2>
            <!-- Descriptive Paragraph -->
            <p class="text-text-medium mb-8 max-w-2xl leading-relaxed">
                {{ $description }}
            </p>
            <!-- CTA: "Saiba Mais" with Circle + Arrow -->
            <a href="{{ $cta_link }}"
               class="inline-flex items-center space-x-3 group mt-4 bg-brand-primary pl-10 pr-10 pt-3 pb-3 rounded-md shadow-md">
                                        <span
                                            class="text-md text-text-light transition font-semibold">
                                            {{ $cta_label }}
                                        </span>
            </a>
        </div>

        <!-- Coluna da Direita: Cards -->
        <div class="lg:w-1/2 relative pb-10 md:pt-10 md:pr-10 md:pl-10">
            <!-- Um único elemento L para toda a seção -->
            <div class="hidden md:block md:absolute bottom-0 left-0">
                    <div class="w-32 h-[13px] bg-brand-primary"></div>
                <div class="absolute bottom-0 left-0 h-32 w-[13px] bg-brand-primary"></div>
            </div>
            <!-- Coluna da cima esquerda -->
            <div class="hidden md:block md:absolute top-0 right-0">
                <div class="w-32 h-[13px] bg-brand-primary"></div>
                <div class="absolute top-0 right-0 h-32 w-[13px] bg-brand-primary"></div>
            </div>


            <!-- Área dos cards -->
            <div class="space-y-10">
                @foreach($cards as $index => $card)
                    <x-landing.card-info
                        class="py-8 rounded-[20px]"
                        :title="$card['title']"
                        :description="$card['description']"
                    />
                @endforeach
            </div>
        </div>
    </div>
</section>
