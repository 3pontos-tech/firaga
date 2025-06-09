<!-- “Nosso Atendimento” Section -->
<section id="nosso-atendimento" class=" mx-auto bg-gradient-to-br from-surface via-bg to-surface text-heading py-28 overflow-hidden">
    <!-- Animated Gradient Overlay -->
    <div class="container mx-auto max-w-7xl px-6 lg:flex lg:items-start lg:justify-between lg:space-x-12 relative z-10">
        <!-- Left Column -->
        <div class="lg:w-1/2 mb-12 lg:mb-0">
            <!-- Small Label -->
            <div class="inline-block bg-bg backdrop-blur-xl px-4 py-1 rounded-md mb-4 shadow border border-brand fadeIn">
                <span class="text-sm text-brand font-semibold">Nosso Atendimento</span>
            </div>
            <!-- Main Heading -->
            <h2 class="text-4xl sm:text-5xl font-extrabold leading-tight mb-6 tracking-tight">
                TRANSFORMAMOS A
                <span class="text-brand">COMPLEXIDADE</span> EM CLAREZA
                COM NOSSA METODOLOGIA.
            </h2>
            <!-- Descriptive Paragraph -->
            <p class="text-gray-400 mb-8 max-w-xl leading-relaxed">
                Levamos você da análise de perfil à execução estratégica,
                com suporte contínuo para maximizar seus resultados.
                Nossa metodologia foi desenvolvida para transformar
                a sua relação com o dinheiro em 3 etapas fundamentais:
            </p>
            <!-- CTA: “Saiba Mais” with Circle + Arrow -->
            <a href="#metodologia-detalhes" class="inline-flex items-center space-x-3 group mt-4">
                <span class="uppercase text-sm tracking-widest text-brand group-hover:text-white transition font-semibold">
                    Saiba Mais
                </span>
                <div class="relative w-12 h-12 border-2 border-brand rounded-full flex items-center justify-center group-hover:bg-brand transition shadow-lg pulse">
                    <!-- Arrow Icon (simple SVG) -->
                    <svg
                        class="w-5 h-5 text-brand group-hover:text-white transition"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </div>
            </a>
        </div>
        <!-- Right Column: Three Steps with Stepper Animation -->
        <div class="lg:w-1/2 space-y-10">
            @foreach($cardData as $index => $card)
                <x-cards.base-card :title="$card['title']" :description="$card['description']" :backgroundImage="$card['backgroundImage']" :index="str_pad($index + 1, 2, '0', STR_PAD_LEFT)" />
            @endforeach
        </div>
    </div>

</section>
