@props([
    'heading' => 'Soluções Personalizadas',
    'badge' => 'Nossas especialidades',
    'description' =>
        'Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia personalizada que se adapta às suas necessidades e objetivos financeiros. Nossa abordagem é baseada em três pilares fundamentais: Análise de Perfil, Planejamento Estratégico e Execução com Suporte Contínuo.',
    'cards' => collect([
                [
                    'title' => 'Planejamento',
                    'description' => 'Três pacotes personalizados para organizar, expandir e maximizar suas finanças, garantindo controle e crescimento contínuo.',
                    'icon' => 'fas-bullseye',
                    'redirect_url' => route('page.show', ['page' => 'planejamento-personalizado']),
                ],
                [
                    'title' => 'Key Account',
                    'description' => 'Atendimento exclusivo para clientes estratégicos, com planejamento sucessório, investimentos internacionais e parcerias de alto impacto.',
                    'icon' => 'fas-crown',
                    'redirect_url' => route('page.show', ['page' => 'key-account']),
                ],
                [
                    'title' => 'Code Capital',
                    'description' => 'Consultoria especializada para profissionais de TI com ganhos em moeda estrangeira, focada em rentabilidade e proteção patrimonial.',
                    'icon' => 'fas-code',
                    'redirect_url' => route('page.show', ['page' => 'code-capital']),
                ],
                [
                    'title' => 'Educa Fire',
                    'description' => 'Vertente educacional para transformar clientes e capacitar consultores com conhecimento aplicado.',
                    'icon' => 'fas-graduation-cap',
                    'redirect_url' => route('page.show', ['page' => 'educa-fire']),
                ],
                [
                    'title' => 'Parcerias',
                    'description' => 'Conexões estratégicas para gerar resultados mais rápidos e eficazes por meio de alianças coorporativas.',
                    'icon' => 'fas-handshake',
                    'redirect_url' => route('page.show', ['page' => 'parcerias']),
                ],
]),
])

<section>
    <div class="py-12 sm:py-16 md:py-20 lg:py-24 mx-auto flex flex-col items-center container">
        <div class="mb-8 sm:mb-12 md:mb-16 px-4 md:px-8 flex flex-col items-center justify-center gap-y-4 sm:gap-y-6"
             style="opacity: 1; transform: none; will-change: opacity, transform;">
            <x-layout.shared.chip class="px-4 py-2">Nossas especialidades</x-layout.shared.chip>
            <x-layout.shared.section-header :heading="$heading" :description="$description"/>
        </div>
        <div class="mx-4 sm:mx-5 overflow-hidden rounded-xl sm:rounded-2xl">
            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4 sm:gap-6 md:gap-8 p-4 sm:p-6 md:p-8 min-h-[420px] items-end">
                @foreach($cards as $card)
                    <x-cards.horizontal-scroller-card
                        :title="$card['title']"
                        :description="$card['description']"
                        :icon="$card['icon']"
                        :cta_label="$card['cta_label']"
                        :cta_link="$card['cta_link']"
                    />
                @endforeach
            </div>
        </div>
        <div class="flex flex-col items-center gap-y-3 sm:gap-y-4 mt-8 sm:mt-12 md:mt-16 px-4">
            <p class="font-bold text-text-medium text-lg sm:text-xl text-center">Não encontrou o que procura?</p>
            <a href=""
               class="font-bold text-brand-primary flex items-center gap-x-2 text-lg sm:text-xl py-2 sm:py-3 px-6 sm:px-8 text-center">Fale
                conosco para uma sugestão personalizada
                <x-lucide-chevron-right class="w-4 h-4"/>
            </a>
        </div>
    </div>
</section>
