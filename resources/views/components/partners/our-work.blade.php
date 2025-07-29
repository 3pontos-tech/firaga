@props([
    'subheading' => 'Nosso Trabalho',
    'heading' => 'Transformando desafios em oportunidades',
    'description' =>
        'Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia personalizada que se adapta às suas necessidades e objetivos financeiros. Nossa abordagem é baseada em três pilares fundamentais: Análise de Perfil, Planejamento Estratégico e Execução com Suporte Contínuo.',
    'cta_label' => 'Saiba Mais',
    'cta_url' => 'https://example.com/saiba-mais',
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

<section id="nosso-atendimento" class="mx-auto text-text-dark dark:text-text-light overflow-hidden py-8 md:py-16 lg:py-20 container  ">
    <div class="lg:flex lg:items-center lg:justify-between lg:space-x-12 relative z-10">
        <div class="lg:w-1/2 mb-8 md:mb-12 lg:mb-0 space-y-6 md:space-y-8 lg:space-y-10">
            <x-layout.shared.chip class="px-4 py-2">
                {{ $subheading }}
            </x-layout.shared.chip>
            <h2
                class="text-text-dark dark:text-text-light font-bold text-2xl sm:text-3xl md:text-4xl lg:text-5xl leading-tight tracking-tight">
                {{ $heading }}
            </h2>
            <p class="text-text-medium text-sm sm:text-base md:text-lg max-w-2xl leading-relaxed">
                {{ $description }}
            </p>
            <x-layout.shared.button :href="$cta_url" variant="primary" class="w-full sm:w-auto px-6 md:px-8 py-3">
                {{ $cta_label }}
            </x-layout.shared.button>
        </div>

        <div class="lg:w-1/2 relative pb-6 md:pb-10 md:pt-10 md:pr-10 md:pl-10">
            <div class="hidden md:block md:absolute bottom-0 left-0">
                <div class="w-20 md:w-32 h-[8px] md:h-[13px] bg-brand-primary"></div>
                <div class="absolute bottom-0 left-0 h-20 md:h-32 w-[8px] md:w-[13px] bg-brand-primary"></div>
            </div>
            <div class="hidden md:block md:absolute top-0 right-0">
                <div class="w-20 md:w-32 h-[8px] md:h-[13px] bg-brand-primary"></div>
                <div class="absolute top-0 right-0 h-20 md:h-32 w-[8px] md:w-[13px] bg-brand-primary"></div>
            </div>

            <div class="space-y-4 md:space-y-6 lg:space-y-10">
                @foreach ($cards as $index => $card)
                    <x-landing.card-info class="py-4 md:py-6 lg:py-8 rounded-lg md:rounded-[20px]" :title="$card['title']" :description="$card['description']" />
                @endforeach
            </div>
        </div>
    </div>
</section>
