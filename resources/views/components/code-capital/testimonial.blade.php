@props([
    'heading' => 'Veja como a Fire|ce deu propósito ao dinheiro de Danilo',
    'description' =>
        'Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia personalizada que se adapta às suas necessidades e objetivos financeiros. Nossa abordagem é baseada em três pilares fundamentais: Análise de Perfil, Planejamento Estratégico e Execução com Suporte Contínuo.',
    'name' => 'Danilo Fernandes',
    'role' => 'Programador e Cliente Fire|ce',
    'testimonial' =>
        'Antes da Fire|ce, meu dinheiro ficava parado. Hoje, tenho clareza, segurança e um propósito real para cada investimento.',
    'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ?si=O6_xTlMmOrEmpqyy',
])

<section class="py-8 sm:py-12 md:py-16 text-white">
    <div class="container mx-auto">
        <div class="grid gap-8 lg:gap-12 lg:grid-cols-16">
            <div class="flex flex-col items-center overflow-hidden rounded-xl lg:col-span-7 gap-y-6 sm:gap-y-8">
                <iframe class="h-full w-full aspect-video" src="{{ $video_url }}" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-x-6 lg:gap-x-8 w-full justify-between">
                    <div class="flex flex-col p-3 sm:p-4 bg-[#303030] gap-y-2 sm:gap-y-3 rounded-lg flex-1 max-w-none sm:max-w-[234px]">
                        <h3 class="text-text-medium font-medium text-sm sm:text-base">Clientes atendidos</h3>
                        <p class="text-text-high font-bold text-2xl sm:text-3xl">500+</p>
                    </div>

                    <div class="flex flex-col p-3 sm:p-4 bg-[#303030] gap-y-2 sm:gap-y-3 rounded-lg flex-1 max-w-none sm:max-w-[234px]">
                        <h3 class="text-text-medium font-medium text-sm sm:text-base">Anos de Experiência</h3>
                        <p class="text-text-high font-bold text-2xl sm:text-3xl">10 anos</p>
                    </div>
                    <div class="flex flex-col p-3 sm:p-4 bg-[#303030] gap-y-2 sm:gap-y-3 rounded-lg flex-1 max-w-none sm:max-w-[234px]">
                        <h3 class="text-text-medium font-medium text-sm sm:text-base">Investidores Satisfeitos</h3>
                        <p class="text-text-high font-bold text-2xl sm:text-3xl">98%</p>
                    </div>

                </div>
            </div>
            <div class="space-y-6 sm:space-y-8 lg:col-start-9 lg:col-span-8">
                <div class="space-y-4 flex flex-col gap-y-4">
                    <x-layout.shared.chip class="px-4 py-2">Histórias que Inspiram</x-layout.shared.chip>
                    <h2 class="text-text-high font-bold text-3xl sm:text-4xl lg:text-5xl leading-tight">
                        {{ $heading }}
                    </h2>
                    <p class="text-text-medium text-base sm:text-lg lg:text-xl">
                        {{ $description }}
                    </p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full">
                    <div class="flex flex-col gap-y-3 sm:gap-y-4">
                        <x-lucide-goal class="w-5 h-5 sm:w-6 sm:h-6" />
                        <h3 class="text-text-high font-bold text-sm sm:text-base">
                            Especialistas planejamento financeiro
                        </h3>
                    </div>

                    <div class="flex flex-col gap-y-3 sm:gap-y-4">
                        <x-lucide-goal class="w-5 h-5 sm:w-6 sm:h-6" />
                        <h3 class="text-text-high font-bold text-sm sm:text-base">
                            Metodologia própria testada e aprovada
                        </h3>
                    </div>
                    <div class="flex flex-col gap-y-3 sm:gap-y-4 sm:col-span-2 lg:col-span-1">
                        <x-lucide-goal class="w-5 h-5 sm:w-6 sm:h-6" />
                        <h3 class="text-text-high font-bold text-sm sm:text-base">
                            Foco em resultados reais e sustentáveis
                        </h3>
                    </div>

                </div>
                <p class="text-text-medium text-base sm:text-lg lg:text-xl">
                    Na nossa consultoria, entendemos que cada cliente é único.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-x-6 lg:gap-x-8">
                    <x-layout.shared.button variant="primary" class="px-6 sm:px-8 py-3 sm:py-4 w-full sm:w-auto">
                        CTA Button
                    </x-layout.shared.button>
                    <x-layout.shared.button variant="outlined" class="px-6 sm:px-8 py-3 sm:py-4 w-full sm:w-auto">
                        CTA Button
                    </x-layout.shared.button>
                </div>
            </div>
        </div>
    </div>
</section>
