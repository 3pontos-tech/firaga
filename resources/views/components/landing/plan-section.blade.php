@props([
    'heading' => 'Planos e preços',
    'description' =>
        'Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia personalizada que se adapta às suas necessidades e objetivos financeiros. Nossa abordagem é baseada em três pilares fundamentais: Análise de Perfil, Planejamento Estratégico e Execução com Suporte Contínuo.',
    'plans' => collect(),
])

<section class="py-24 mx-auto flex flex-col items-center container">
    <div class="mb-16 px-4 md:px-8" style="opacity: 1; transform: none; will-change: opacity, transform;">
        <x-landing.section-header :heading="$heading" :description="$description" />
    </div>
    <div class="mx-5 overflow-hidden rounded-2xl">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 p-8 items-start">
            @foreach ($plans as $plan)
                <x-landing.plan-card :plan="$plan" />
            @endforeach
        </div>
    </div>
</section>
