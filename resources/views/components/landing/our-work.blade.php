@props([
    'subheading' => 'Nosso Trabalho',
    'heading' => 'Transformando desafios em oportunidades',
    'description' =>
        'Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia personalizada que se adapta às suas necessidades e objetivos financeiros. Nossa abordagem é baseada em três pilares fundamentais: Análise de Perfil, Planejamento Estratégico e Execução com Suporte Contínuo.',
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
<section id="nosso-atendimento" class="mx-auto text-text-dark dark:text-text-light  overflow-hidden">
    <div class="mx-auto px-16  lg:flex lg:items-center lg:justify-between lg:space-x-12 relative z-10">
        <!-- Coluna da Esquerda -->
        <div class="lg:w-1/2 mb-12 lg:mb-0 space-y-10">
            <!-- Small Label -->
            <x-layout.shared.chip>
                <x-lucide-sun class="w-4 h-4 text-brand-primary" />
                {{ $subheading }}
            </x-layout.shared.chip>
            <!-- Main Heading -->
            <h2
                class="text-text-dark dark:text-text-light font-bold text-4xl sm:text-5xl  leading-tight mb-6 tracking-tight">
                {{ $heading }}
            </h2>
            <!-- Descriptive Paragraph -->
            <p class="text-text-medium mb-8 max-w-2xl leading-relaxed">
                {{ $description }}
            </p>
            <!-- CTA: "Saiba Mais" with Circle + Arrow -->
            <x-layout.shared.button :href="$cta_link" variant="primary" class="px-8 py-3">
                {{ $cta_label }}
            </x-layout.shared.button>
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
                @foreach ($cards as $index => $card)
                    <x-landing.card-info class="py-8 rounded-[20px]" :title="$card['title']" :description="$card['description']" />
                @endforeach
            </div>
        </div>
    </div>
</section>
