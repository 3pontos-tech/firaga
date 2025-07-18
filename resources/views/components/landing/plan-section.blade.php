@props([
    'heading' => 'Planos e preços',
    'description' =>
        'Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia personalizada que se adapta às suas necessidades e objetivos financeiros. Nossa abordagem é baseada em três pilares fundamentais: Análise de Perfil, Planejamento Estratégico e Execução com Suporte Contínuo.',
    'plans' => collect(),
])
<section class="py-12 sm:py-16 md:py-20 lg:py-24">
    <div class="mx-auto flex flex-col items-center container px-4 sm:px-6 lg:px-8">
        <div class="mb-8 sm:mb-12 md:mb-14 lg:mb-16 w-full max-w-4xl">
            <x-layout.shared.section-header :heading="$heading" :description="$description" />
        </div>
        <div class="w-full ">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 md:gap-10 lg:gap-12">
                @foreach ($plans as $plan)
                    <x-landing.plan-card :plan="$plan" />
                @endforeach
            </div>
        </div>
    </div>
</section>
