@props([
    'heading' => 'Veja como a Fire|ce deu propósito ao dinheiro de Danilo',
    'description' =>
        'Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia personalizada que se adapta às suas necessidades e objetivos financeiros. Nossa abordagem é baseada em três pilares fundamentais: Análise de Perfil, Planejamento Estratégico e Execução com Suporte Contínuo.',
    'name' => 'Danilo Fernandes',
    'role' => 'Programador e Cliente Fire|ce',
    'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ?si=O6_xTlMmOrEmpqyy',
    'insights' => [],
    'video_cards' => []
])

<section class="py-8 sm:py-12 md:py-16 text-white">
    <div class="container mx-auto">
        <div class="grid gap-8 lg:gap-12 lg:grid-cols-16">
            <div class="flex flex-col items-center overflow-hidden rounded-xl lg:col-span-7 gap-y-6 sm:gap-y-8">
                <iframe class="h-full w-full aspect-video" src="{{ $video_url }}" title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-x-6 lg:gap-x-8 w-full justify-between">
                    @foreach($video_cards as $card)
                        <div class="flex flex-col p-3 sm:p-4 bg-[#303030] gap-y-2 sm:gap-y-3 rounded-lg flex-1 max-w-none sm:max-w-[234px]">
                            <h3 class="text-text-medium font-medium text-sm sm:text-base">{{ $card['title'] }}</h3>
                            <p class="text-text-high font-bold text-2xl sm:text-3xl">{{ $card['value'] }}</p>
                        </div>
                    @endforeach
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
                    @foreach($insights as $insight)
                        <div class="flex flex-col gap-y-3 sm:gap-y-4">
                            <x-lucide-goal class="w-5 h-5 sm:w-6 sm:h-6 text-brand-primary"/>
                            <h3 class="text-text-high font-bold text-sm sm:text-base">
                                {{ $insight['value'] }}
                            </h3>
                        </div>
                    @endforeach
                </div>
                <p class="text-text-medium text-base sm:text-lg lg:text-xl">
                    Na nossa consultoria, entendemos que cada cliente é único.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-x-6 lg:gap-x-8">
                    <x-layout.shared.button :href="$cta_url" variant="primary" class="px-6 sm:px-8 py-3 sm:py-4 w-full sm:w-auto">
                        {{ $cta_label }}
                    </x-layout.shared.button>
                </div>
            </div>
        </div>
    </div>
</section>
