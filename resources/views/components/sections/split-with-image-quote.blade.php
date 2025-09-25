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

<section class="mx-auto text-text-dark dark:text-text-light overflow-hidden py-8 md:py-16 lg:py-20">
    <div class="mx-auto container px-4 md:px-6 lg:flex lg:items-center lg:justify-between lg:space-x-12 relative z-10">
        <div class="lg:w-1/2 mb-8 md:mb-12 lg:mb-0 space-y-6 md:space-y-8 lg:space-y-10 {{ $contentPos }}">
            @if($badge)
                <x-layout.shared.chip class="px-4 py-2">
                    {{ $badge }}
                </x-layout.shared.chip>
            @endif

            <h2 class="font-bold text-2xl sm:text-3xl md:text-4xl lg:text-5xl leading-tight tracking-tight">
                {{ $heading }}
            </h2>

            <p class="text-text-medium text-sm sm:text-base md:text-lg max-w-2xl leading-relaxed">
                {{ $description }}
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                @foreach ($cards as $card)
                    <x-cards.card-slim
                        class="py-6 px-4 rounded-lg md:rounded-[20px] bg-surface dark:bg-surface-dark"
                        :title="$card['title']"
                        :description="$card['description']"
                        :icon="$card['icon']"
                    />
                @endforeach
            </div>
        </div>

        <div class="lg:w-1/2 relative {{ $imagePos }}">
            <div class="aspect-[4/3] md:aspect-square lg:aspect-[4/3] relative overflow-hidden rounded-xl md:rounded-2xl shadow-2xl">
                <img
                    src="{{ $renderable?->getFirstMediaUrl(App\Enums\CustomComponent::SplitWithImageQuote->value) ?? asset('images/stock/our-work.png') }}"
                    alt="Equipe Fire|ce"
                    class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                    loading="lazy"
                >
            </div>
        </div>
    </div>
</section>
