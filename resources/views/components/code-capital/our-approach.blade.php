<div class="container flex justify-between items-end">
    <div class="w-4/6 flex flex-col ">
        <div class="flex flex-col gap-y-10">
            <x-layout.shared.chip>
                Por que escolher a Code Capital?
            </x-layout.shared.chip>
            <h2 class="text-text-high font-bold text-5xl ">
                Construído por profissionais de Finanças e Tecnologia
            </h2>
            <p class="text-text-medium leading-relaxed text-xl">
                Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia
                personalizada que se adapta às suas necessidades e objetivos financeiros. Nossa abordagem é baseada em
                três
                pilares fundamentais: Análise de Perfil, Planejamento Estratégico e Execução com Suporte Contínuo.
            </p>
        </div>
        <div class="grid grid-cols-2 gap-8 mt-12">
            <div class="flex flex-col gap-8">
                <x-code-capital.our-approach-card title="Análise de Perfil"
                    description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu augue erat. Duis velit eros, suscipit at nisi vitae, faucibus hendrerit turpis." />
                <x-code-capital.our-approach-card title="Análise de Perfil"
                    description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu augue erat. Duis velit eros, suscipit at nisi vitae, faucibus hendrerit turpis." />
            </div>
            <div class="flex flex-col gap-8">
                <x-code-capital.our-approach-card title="Análise de Perfil"
                    description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu augue erat. Duis velit eros, suscipit at nisi vitae, faucibus hendrerit turpis." />
                <x-code-capital.our-approach-card title="Planejamento Estratégico"
                    description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu augue erat. Duis velit eros, suscipit at nisi vitae, faucibus hendrerit turpis." />
            </div>
        </div>
        <div class="flex justify-start gap-x-4 mt-12">
            <x-layout.shared.button class="bg-brand-primary text-white p-4">
                Agende uma consulta gratuita
            </x-layout.shared.button>
            <x-layout.shared.button variant="outline" class="text-text-high p-4">
                Saiba mais
            </x-layout.shared.button>
        </div>
    </div>
    <div class="w-2/4 flex justify-end">
        <img src="{{ asset('images/stock/our-approach.png') }}" alt="Code Capital" class="w-[652px] object-cover">
    </div>
</div>
