@props([
    'heading' => 'Soluções Personalizadas',
    'description' =>
        'Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia personalizada que se adapta às suas necessidades e objetivos financeiros. Nossa abordagem é baseada em três pilares fundamentais: Análise de Perfil, Planejamento Estratégico e Execução com Suporte Contínuo.',
    'solutions' => collect(),
])

<section>
    <div class="py-12 sm:py-16 md:py-20 lg:py-24 mx-auto flex flex-col items-center container">
        <div class="mb-8 sm:mb-12 md:mb-16 px-4 md:px-8 flex flex-col items-center justify-center gap-y-4 sm:gap-y-6"
            style="opacity: 1; transform: none; will-change: opacity, transform;">
            <x-layout.shared.chip>Nossas especialidades</x-layout.shared.chip>
            <x-layout.shared.section-header :heading="$heading" :description="$description" />
        </div>
        <div class="mx-4 sm:mx-5 overflow-hidden rounded-xl sm:rounded-2xl">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4 sm:gap-6 md:gap-8 p-4 sm:p-6 md:p-8 items-start">
                <x-landing.solution-card title="Planejamento Estratégico"
                    description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu augue erat. Duis velit eros, suscipit at nisi vitae, faucibus hendrerit turpis." />
                <x-landing.solution-card title="Planejamento Estratégico"
                    description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu augue erat. Duis velit eros, suscipit at nisi vitae, faucibus hendrerit turpis." />
                <div class="p-4 sm:p-6 md:p-8 bg-brand-primary rounded-lg sm:col-span-2 lg:col-span-1 xl:col-span-1">
                    <div class="flex flex-col gap-y-3 sm:gap-y-4">
                        <x-lucide-goal class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-text-light" />
                        <h6 class="font-semibold text-text-light text-lg sm:text-xl md:text-2xl">Code Capital</h6>
                        <p class="text-text-light font-medium text-base sm:text-lg md:text-xl leading-[150%]">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.
                            Mauris eu augue erat. Duis velit eros, suscipit at nisi vitae, faucibus hendrerit turpis.
                        </p>
                        <a href="#" class="font-bold text-text-light p-2 sm:p-3 md:p-4 flex items-center gap-x-2 text-sm sm:text-base">Visitar
                            <x-lucide-chevron-right class="w-4 h-4" /></a>
                    </div>
                </div>
                <x-landing.solution-card title="Planejamento Estratégico"
                    description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu augue erat. Duis velit eros, suscipit at nisi vitae, faucibus hendrerit turpis." />
                <x-landing.solution-card title="Planejamento Estratégico"
                    description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu augue erat. Duis velit eros, suscipit at nisi vitae, faucibus hendrerit turpis." />
            </div>
        </div>
        <div class="flex flex-col items-center gap-y-3 sm:gap-y-4 mt-8 sm:mt-12 md:mt-16 px-4">
            <p class="font-bold text-text-medium text-lg sm:text-xl text-center">Não encontrou o que procura?</p>
            <a href="" class="font-bold text-brand-primary flex items-center gap-x-2 text-lg sm:text-xl py-2 sm:py-3 px-6 sm:px-8 text-center">Fale
                conosco para uma sugestão personalizada <x-lucide-chevron-right class="w-4 h-4" /></a>
        </div>
    </div>
</section>
