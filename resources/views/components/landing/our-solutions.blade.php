@props([
    'heading' => 'Soluções Personalizadas',
    'description' =>
        'Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia personalizada que se adapta às suas necessidades e objetivos financeiros. Nossa abordagem é baseada em três pilares fundamentais: Análise de Perfil, Planejamento Estratégico e Execução com Suporte Contínuo.',
    'solutions' => collect(),
])

<section class="bg-base-200/80 ">
    <div class=" py-24 mx-auto flex flex-col items-center">
        <div class="mb-16 px-4 md:px-8 flex flex-col items-center gap-y-6" style="opacity: 1; transform: none; will-change: opacity, transform;">
            <x-layout.shared.chip>Nossas especialidades</x-layout.shared.chip>
            <x-landing.section-header :heading="$heading" :description="$description" />
        </div>
        <div class="mx-5 overflow-hidden rounded-2xl">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-8 p-8 items-start">
                <x-landing.solution-card title="Planejamento Estratégico"
                    description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu augue erat. Duis velit eros, suscipit at nisi vitae, faucibus hendrerit turpis." />
                <x-landing.solution-card title="Planejamento Estratégico"
                    description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu augue erat. Duis velit eros, suscipit at nisi vitae, faucibus hendrerit turpis." />
                <div class="px-8 py-15 bg-brand-primary rounded">
                    <div class="flex flex-col gap-y-4">
                        <h6 class="font-semibold text-text-light">Code Capital</h6>
                        <p class="text-text-light font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Mauris eu augue erat. Duis velit eros, suscipit at nisi vitae, faucibus hendrerit turpis.
                        </p>
                        <a href="#" class="font-bold text-text-light">Visitar ></a>
                    </div>
                </div>
                <x-landing.solution-card title="Planejamento Estratégico"
                    description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu augue erat. Duis velit eros, suscipit at nisi vitae, faucibus hendrerit turpis." />
                <x-landing.solution-card title="Planejamento Estratégico"
                    description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu augue erat. Duis velit eros, suscipit at nisi vitae, faucibus hendrerit turpis." />
            </div>
        </div>
        <div class="flex flex-col items-center gap-y-4 mt-16">
            <p class="font-bold text-text-medium">Não encontrou o que procura?</p>
            <a href="" class="font-bold text-brand-primary flex items-center gap-x-2">Fale conosco para uma sugestão personalizada <x-lucide-chevron-right class="w-4 h-4" /></a>
        </div>
    </div>
</section>
