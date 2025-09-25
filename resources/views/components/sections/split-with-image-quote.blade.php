@props([
    'heading' => 'Conheça mais sobre a Fire|ce',
    'description' => 'A Fire|ce ajuda empresas a promoverem alta performance por meio da educação financeira. Com programas sob medida, consultores especializados e soluções integradas, criamos pontes entre saúde financeira e produtividade.',
    'image_position' => 'right',
    'badge' => 'Sobre nós',
    'cards' => collect([
        [
            'title' => 'Projetos Conjuntos',
            'description' => 'Monetize sua influência ou rede com um modelo de parceria inteligente e sustentável — você lucra enquanto ajuda pessoas a transformarem suas vidas financeiras.',
            'icon' => 'heroicon-o-chat-bubble-left-right',
        ],
        [
            'title' => 'Reconhecimento',
            'description' => 'Associe sua marca ou imagem a uma consultoria que entrega resultados reais e melhora a relação das pessoas com o dinheiro.',
            'icon' => 'heroicon-o-chat-bubble-left-right',
        ],
        [
            'title' => 'Ecossistema Fire|ce',
            'description' => 'Tenha contato privilegiado com nossos produtos, lançamentos e soluções, além de ferramentas que tornam a parceria ainda mais eficiente.',
            'icon' => 'heroicon-o-chat-bubble-left-right',
        ],
        [
            'title' => 'Suporte contínuo',
            'description' => 'Contamos com uma equipe que acompanha sua jornada, oferece materiais personalizados, treinamentos e um plano de crescimento contínuo.',
            'icon' => 'heroicon-o-chat-bubble-left-right',
        ],
    ]),
])

@php
    $imagePos = $image_position === 'left' ? 'lg:order-1' : 'lg:order-2';
    $contentPos = $image_position === 'left' ? 'lg:order-2' : 'lg:order-1';
@endphp

<section class="mx-auto text-text-dark dark:text-text-light overflow-hidden py-6 sm:py-8 md:py-12 lg:py-16 xl:py-20">
    <div class="mx-auto container px-4 sm:px-6 md:px-8 lg:px-6 xl:px-8 2xl:px-12">
        <div class="lg:flex lg:items-start lg:justify-between lg:gap-8 xl:gap-12 2xl:gap-16 relative z-10">

            <div class="lg:w-1/2 mb-8 sm:mb-10 md:mb-12 lg:mb-0 space-y-4 sm:space-y-6 md:space-y-8 lg:space-y-6 xl:space-y-8 {{ $contentPos }}">

                @if($badge)
                    <x-layout.shared.chip class="inline-flex px-3 py-1.5 sm:px-4 sm:py-2 text-xs sm:text-sm">
                        {{ $badge }}
                    </x-layout.shared.chip>
                @endif

                <h2 class="font-bold text-xl sm:text-2xl md:text-3xl lg:text-3xl xl:text-4xl 2xl:text-5xl leading-tight tracking-tight">
                    {{ $heading }}
                </h2>

                <p class="text-text-medium text-sm sm:text-base md:text-lg lg:text-base xl:text-lg leading-relaxed max-w-none lg:max-w-xl xl:max-w-2xl">
                    {{ $description }}
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5 md:gap-6 lg:gap-4 xl:gap-5 2xl:gap-6 pt-2 sm:pt-4">
                    @foreach ($cards as $card)
                        <x-cards.card-slim
                            class="py-4 px-3 sm:py-5 sm:px-4 md:py-6 md:px-5 lg:py-4 lg:px-3 xl:py-5 xl:px-4 rounded-lg md:rounded-xl lg:rounded-lg xl:rounded-xl bg-surface dark:bg-surface-dark transition-all duration-200 hover:shadow-md"
                            :title="$card['title']"
                            :description="$card['description']"
                            :icon="$card['icon']"
                        />
                    @endforeach
                </div>
            </div>

            <div class="lg:w-1/2 relative {{ $imagePos }} lg:flex-shrink-0">
                <div class="aspect-[4/3] sm:aspect-[3/2] md:aspect-[4/3] lg:aspect-square xl:aspect-[4/3] 2xl:aspect-[5/4] relative overflow-hidden rounded-lg sm:rounded-xl md:rounded-2xl lg:rounded-xl xl:rounded-2xl shadow-lg md:shadow-xl lg:shadow-lg xl:shadow-xl hover:shadow-2xl transition-shadow duration-300">
                    <img
                        src="{{ $renderable?->getFirstMediaUrl(App\Enums\CustomComponent::SplitWithImageQuote->value) ?? asset('images/stock/our-work.png') }}"
                        alt="Equipe Fire|ce"
                        class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                        loading="lazy"
                    >

                    <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                </div>
            </div>
        </div>
    </div>
</section>
