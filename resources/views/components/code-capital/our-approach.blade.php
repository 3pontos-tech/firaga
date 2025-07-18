<div class="container mx-auto px-4 md:px-6">
    <div class="flex flex-col lg:flex-row lg:justify-between lg:items-end gap-8 lg:gap-12">
        <div class="w-full lg:w-4/6 flex flex-col">
            <div class="flex flex-col gap-y-6 sm:gap-y-8 md:gap-y-10">
                <x-layout.shared.chip>
                    Por que escolher a Code Capital?
                </x-layout.shared.chip>
                <h2 class="text-text-high font-bold text-2xl sm:text-3xl md:text-4xl lg:text-5xl leading-tight">
                    Construído por profissionais de Finanças e Tecnologia
                </h2>
                <p class="text-text-medium leading-relaxed text-base sm:text-lg md:text-xl">
                    Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia
                    personalizada que se adapta às suas necessidades e objetivos financeiros. Nossa abordagem é baseada em
                    três
                    pilares fundamentais: Análise de Perfil, Planejamento Estratégico e Execução com Suporte Contínuo.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 mt-8 sm:mt-10 md:mt-12">
                <div class="flex flex-col gap-6 sm:gap-8">
                    <x-code-capital.our-approach-card title="Análise de Perfil"
                        description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu augue erat. Duis velit eros, suscipit at nisi vitae, faucibus hendrerit turpis." />
                    <x-code-capital.our-approach-card title="Análise de Perfil"
                        description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu augue erat. Duis velit eros, suscipit at nisi vitae, faucibus hendrerit turpis." />
                </div>
                <div class="flex flex-col gap-6 sm:gap-8">
                    <x-code-capital.our-approach-card title="Análise de Perfil"
                        description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu augue erat. Duis velit eros, suscipit at nisi vitae, faucibus hendrerit turpis." />
                    <x-code-capital.our-approach-card title="Planejamento Estratégico"
                        description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu augue erat. Duis velit eros, suscipit at nisi vitae, faucibus hendrerit turpis." />
                </div>
            </div>
            <div class="flex flex-col sm:flex-row justify-start gap-4 sm:gap-x-4 mt-8 sm:mt-10 md:mt-12">
                <x-layout.shared.button class="bg-brand-primary text-white p-3 sm:p-4 w-full sm:w-auto">
                    Agende uma consulta gratuita
                </x-layout.shared.button>
                <x-layout.shared.button variant="outline" class="text-text-high p-3 sm:p-4 w-full sm:w-auto">
                    Saiba mais
                </x-layout.shared.button>
            </div>
        </div>
        <div class="w-full lg:w-2/4 justify-center lg:justify-end mt-8 lg:mt-0 hidden xl:block">
            <img src="{{ asset('images/stock/our-approach.png') }}" alt="Code Capital" class="w-full max-w-[500px] lg:max-w-[652px] object-cover">
        </div>
    </div>
</div>
