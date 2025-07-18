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

<section class="py-16 text-white">
    <div class="container mx-auto px-4 ">
        <div class="grid gap-12 lg:grid-cols-16">
            <div class="flex flex-col items-center overflow-hidden rounded-xl col-span-7 gap-y-8">
                <iframe class="h-full w-full aspect-video" src="{{ $video_url }}" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <div class="flex flex-row gap-x-8 w-full justify-between">
                    <div class="flex flex-col p-4 bg-[#303030] gap-y-3 rounded-lg max-w-[234px] w-full">
                        <h3 class="text-text-medium font-medium ">Clientes atendidos</h3>
                        <p class="text-text-high font-bold text-3xl">500+</p>
                    </div>

                    <div class="flex flex-col p-4 bg-[#303030] gap-y-3 rounded-lg max-w-[234px] w-full">
                        <h3 class="text-text-medium font-medium">Anos de Experiência</h3>
                        <p class="text-text-high font-bold text-3xl">10 anos</p>
                    </div>
                    <div class="flex flex-col p-4 bg-[#303030] gap-y-3 rounded-lg max-w-[234px] w-full">
                        <h3 class="text-text-medium font-medium">Investidores Satisfeitos</h3>
                        <p class="text-text-high font-bold text-3xl">98%</p>
                    </div>

                </div>
            </div>
            <div class="space-y-8 col-start-9 col-span-8">
                <div class="space-y-4 flex flex-col gap-y-4">
                    <x-layout.shared.chip>Histórias que Inspiram</x-layout.shared.chip>
                    <h2 class="text-text-high font-bold text-5xl">
                        {{ $heading }}
                    </h2>
                    <p class="text-text-medium text-xl">
                        {{ $description }}
                    </p>
                </div>
                <div class="flex justify-between w-full">
                    <div class="flex flex-col gap-y-4">
                        <x-lucide-goal class="w-6 h-6" />
                        <h3 class="text-text-high font-bold">
                            Especialistas planejamento financeiro
                        </h3>
                    </div>

                    <div class="flex flex-col gap-y-4">
                        <x-lucide-goal class="w-6 h-6" />
                        <h3 class="text-text-high font-bold">
                            Metodologia própria testada e aprovada
                        </h3>
                    </div>
                    <div class="flex flex-col gap-y-4">
                        <x-lucide-goal class="w-6 h-6" />
                        <h3 class="text-text-high font-bold">
                            Foco em resultados reais e sustentáveis
                        </h3>
                    </div>

                </div>
                <p class="text-text-medium text-xl">
                    Na nossa consultoria, entendemos que cada cliente é único.
                </p>
                <div class="flex flex-row gap-x-8">
                    <x-layout.shared.button variant="primary" class="px-8 py-4">
                        CTA Button
                    </x-layout.shared.button>
                    <x-layout.shared.button variant="outline" class="px-8 py-4">
                        CTA Button
                    </x-layout.shared.button>
                </div>
            </div>
        </div>
</section>
