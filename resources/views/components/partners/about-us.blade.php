<div class="container mx-auto px-4 md:px-6">
    <div class="flex flex-col lg:flex-row lg:justify-around lg:items-center gap-8 lg:gap-12">
        <div class="w-full  flex flex-col">
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
        </div>
        <div class="w-full justify-center lg:mt-0 hidden xl:flex mb-24 ">
             <div class="relative">
                    <img src="{{ asset('images/stock/our-work-partners.png') }}" alt="Our Work"
                        class="w-full h-full object-cover">
                    <div
                        class="absolute bottom-3 sm:bottom-4 lg:bottom-6 xl:bottom-8 left-3/5 transform -translate-x-1/2 text-white text-sm sm:text-base lg:text-lg xl:text-xl font-medium w-[85%] sm:w-[80%] lg:w-[85%] xl:w-[80%] flex flex-col sm:flex-row items-start gap-2 sm:gap-x-3 lg:gap-x-4 justify-center">
                        <img src="{{ asset('images/quote-mark.svg') }}" alt="Quote"
                            class="w-5 h-5 sm:w-6 sm:h-6 lg:w-8 lg:h-8 xl:w-10 xl:h-10 flex-shrink-0" />
                        <span class="leading-relaxed text-3xl font-bold">Vamos construir o próximo nível da sua jornada financeira com o Key Account da
                            Fire|ce.</span>
                    </div>
                </div>
        </div>
    </div>
</div>
