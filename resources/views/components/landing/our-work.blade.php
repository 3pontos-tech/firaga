<!-- “Nosso Atendimento” Section -->
<section id="nosso-atendimento" class="max-w-7xl mx-auto bg-gradient-to-br from-black via-gray-900 to-black dark:from-black dark:via-gray-900 dark:to-black text-white dark:text-white py-28 overflow-hidden">
    <!-- Animated Gradient Overlay -->
    <div class="absolute inset-0 pointer-events-none z-0">
        <!--<div class="absolute left-1/2 top-0 w-2/3 h-2/3 -translate-x-1/2 blur-3xl opacity-40 animate-gradient-move rounded-full bg-gradient-to-tr from-orange-500 via-pink-500 to-purple-600"></div>
        <div class="absolute bottom-0 right-0 w-1/4 h-1/4 blur-2xl opacity-30 animate-float-slow bg-gradient-to-br from-orange-400 via-yellow-500 to-pink-500 rounded-full"></div>-->
    </div>
    <div class="container mx-auto px-6 lg:flex lg:items-start lg:justify-between lg:space-x-12 relative z-10">
        <!-- Left Column -->
        <div class="lg:w-1/2 mb-12 lg:mb-0">
            <!-- Small Label -->
            <div class="inline-block bg-white/10 dark:bg-gray-900/30 backdrop-blur-xl px-4 py-1 rounded-md mb-4 shadow border border-orange-500/20 animate-fade-in">
                <span class="text-sm text-orange-400 font-semibold">Nosso Atendimento</span>
            </div>
            <!-- Main Heading -->
            <h2 class="text-4xl sm:text-5xl font-extrabold leading-tight mb-6 tracking-tight">
                TRANSFORMAMOS A
                <span class="text-orange-500">COMPLEXIDADE</span> EM CLAREZA
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
                <span class="uppercase text-sm tracking-widest text-orange-400 group-hover:text-white transition font-semibold">
                    Saiba Mais
                </span>
                <div class="relative w-12 h-12 border-2 border-orange-500 rounded-full flex items-center justify-center group-hover:bg-orange-500 transition shadow-lg animate-glow">
                    <!-- Arrow Icon (simple SVG) -->
                    <svg
                        class="w-5 h-5 text-orange-500 group-hover:text-white transition"
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
                <x-cards.baseCard :title="$card['title']" :description="$card['description']" :backgroundImage="$card['backgroundImage']" :index="str_pad($index + 1, 2, '0', STR_PAD_LEFT)" />
            @endforeach
        </div>
    </div>
    <!-- Custom Animations -->
    <style>
        .animate-gradient-move {
            animation: gradientMove 8s ease-in-out infinite alternate;
        }
        @keyframes gradientMove {
            0% { transform: translate(-50%, 0) scale(1); }
            100% { transform: translate(-50%, 40px) scale(1.1); }
        }
        .animate-float-slow { animation: floatSlow 7s ease-in-out infinite alternate; }
        @keyframes floatSlow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-24px); }
        }
        .animate-glow { animation: glow 2s ease-in-out infinite alternate; }
        @keyframes glow {
            0% { opacity: 0.5; filter: blur(8px); }
            100% { opacity: 1; filter: blur(16px); }
        }
        .animate-fade-in { animation: fadeIn 1.2s cubic-bezier(.4,0,.2,1) both; }
        .animate-fade-in.delay-100 { animation-delay: 0.1s; }
        .animate-fade-in.delay-200 { animation-delay: 0.2s; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-stepper { animation: stepper 1.5s cubic-bezier(.4,0,.2,1) infinite alternate; }
        @keyframes stepper {
            0% { box-shadow: 0 0 0 0 rgba(255, 165, 0, 0.5); }
            100% { box-shadow: 0 0 24px 8px rgba(255, 165, 0, 0.3); }
        }
    </style>
</section>
