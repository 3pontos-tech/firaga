<!-- Testimonial Section -->
<section id="depoimentos" class="relative bg-gradient-to-br from-black via-gray-900 to-black dark:from-black dark:via-gray-900 dark:to-black text-white dark:text-white py-24 md:py-28 overflow-hidden">
    <!-- Animated Gradient Overlay -->
    <div class="absolute inset-0 pointer-events-none z-0">
        <div class="absolute top-0 left-1/2 w-[80vw] h-[80vw] -translate-x-1/2 blur-3xl opacity-40 animate-gradient-move rounded-full bg-gradient-to-tr from-orange-500 via-pink-500 to-purple-600"></div>
        <div class="absolute bottom-0 right-0 w-1/3 h-1/3 blur-2xl opacity-30 animate-float-slow bg-gradient-to-br from-orange-400 via-yellow-500 to-pink-500 rounded-full"></div>
    </div>
    <div class="container mx-auto px-6 lg:flex lg:items-center lg:justify-between lg:space-x-12 relative z-10">
        <!-- Left Column: Stars, Quote, Author Info -->
        <div class="lg:w-1/2">
            <!-- Animated Stars -->
            <div class="flex space-x-1 mb-6 animate-pulse">
                <span class="text-yellow-400 text-2xl drop-shadow animate-float">★</span>
                <span class="text-yellow-400 text-2xl drop-shadow animate-float delay-100">★</span>
                <span class="text-yellow-400 text-2xl drop-shadow animate-float delay-200">★</span>
                <span class="text-yellow-400 text-2xl drop-shadow animate-float delay-300">★</span>
                <span class="text-yellow-400 text-2xl drop-shadow animate-float delay-400">★</span>
            </div>
            <!-- Center Testimonial (highlighted) -->
            <div class="w-full max-w-md scale-105 shadow-orange-500/30 hover:shadow-orange-500/40 hover:scale-[1.07] z-10 relative transition-all duration-300 flex-shrink-0">
                <blockquote class="relative bg-white/10 dark:bg-gray-900/30 backdrop-blur-xl rounded-2xl shadow-xl border border-orange-500/30 hover:border-orange-500/50 px-8 py-10 mb-8 overflow-hidden animate-fade-in transition-all duration-300">
                    <svg class="absolute -top-6 -left-6 w-16 h-16 text-orange-500/30 animate-bounce-slow" fill="none" viewBox="0 0 48 48"><text x="0" y="40" font-size="48" font-family="serif">“</text></svg>
                    <span class="italic text-gray-200 text-xl leading-relaxed">
                        Sou apaixonado como a Fire|Ce tem me ajudado a mudar a minha
                        vida financeira de uma forma simples, educativa e com resultados
                        positivos expressivos desde o início. Super aconselho o
                        acompanhamento desta equipe aos meu familiares e amigos para
                        que eles também tenham a oportunidade de pensar e garantir um
                        futuro melhor, aprendendo e pondo em prática uma educação
                        financeira disciplinada e com consciência do uso do seu dinheiro.
                    </span>
                </blockquote>
                                    <div class="flex flex-col items-start space-y-1 px-2">
                    <!-- Estrelas -->
                    <div class="flex items-center mb-1">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-yellow-400 fill-current animate-star-pulse" style="animation-delay: {{ $i * 0.08 }}s" viewBox="0 0 20 20"><polygon points="10,1 12.59,7.36 19.51,7.36 13.97,11.64 16.56,18 10,13.72 3.44,18 6.03,11.64 0.49,7.36 7.41,7.36"/></svg>
                        @endfor
                    </div>
                    <div class="flex items-center space-x-6">
                        <div class="relative">
                            <span class="absolute inset-0 rounded-full bg-gradient-to-tr from-orange-400 via-pink-500 to-yellow-400 blur-md opacity-60 animate-glow"></span>
                            <img
                                src="https://github.com/danielhe4rt.png"
                                alt="Marcos Henrique Diogenes"
                                class="w-14 h-14 rounded-full object-cover border-4 border-orange-500 shadow-lg relative z-10 hover:scale-110 transition-all duration-300"
                                loading="lazy"
                            />
                        </div>
                        <div>
                            <div class="text-white font-bold text-lg">Marcos Henrique Diogenes</div>
                            <div class="text-orange-400 text-sm font-medium">Cliente Premium</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Testimonial (smaller, less elevated) -->
            <div class="w-full max-w-sm lg:max-w-xs scale-90 opacity-80 blur-[1px] lg:blur-0 lg:opacity-80 lg:scale-90 transition-all duration-300 flex-shrink-0">
                <blockquote class="relative bg-white/10 dark:bg-gray-900/30 backdrop-blur-xl rounded-2xl shadow-lg border border-orange-500/20 px-6 py-8 mb-6 overflow-hidden animate-fade-in">
                    <svg class="absolute -top-4 -left-4 w-10 h-10 text-orange-500/20" fill="none" viewBox="0 0 48 48"><text x="0" y="40" font-size="48" font-family="serif">“</text></svg>
                    <span class="italic text-gray-200 text-base leading-relaxed">
                        Nunca imaginei que aprender sobre finanças seria tão fácil. O suporte da equipe é incrível!
                    </span>
                </blockquote>
                                    <div class="flex flex-col items-start space-y-1 px-2">
                    <!-- Estrelas -->
                    <div class="flex items-center mb-1">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-4 h-4 text-yellow-400 fill-current animate-star-pulse" style="animation-delay: {{ $i * 0.08 }}s" viewBox="0 0 20 20"><polygon points="10,1 12.59,7.36 19.51,7.36 13.97,11.64 16.56,18 10,13.72 3.44,18 6.03,11.64 0.49,7.36 7.41,7.36"/></svg>
                        @endfor
                    </div>
                    <div class="flex items-center space-x-4">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Ana Souza" class="w-10 h-10 rounded-full border-2 border-orange-400 object-cover hover:scale-110 transition-all duration-300" loading="lazy" />
                        <div>
                            <div class="text-white font-bold text-sm">Ana Souza</div>
                            <div class="text-orange-400 text-xs font-medium">Cliente</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- “Todos os Reviews” Button centralizado abaixo dos cards -->
        <div class="flex justify-center mt-12">
            <a
                href="/todos-reviews"
                class="relative bg-orange-500 text-white font-semibold px-5 py-2 rounded-full flex items-center space-x-2 shadow-lg overflow-hidden transition group focus:outline-none focus:ring-2 focus:ring-orange-400 hover:bg-orange-600"
                aria-label="Ver todos os reviews"
            >
                <span class="absolute inset-0 bg-gradient-to-r from-orange-400 via-pink-500 to-yellow-400 opacity-0 group-hover:opacity-30 transition-all blur-lg animate-glow-pulse"></span>
                <span class="relative z-10 group-hover:scale-105 transition-transform">TODOS OS REVIEWS</span>
                <svg class="w-5 h-5 text-white relative z-10 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
            </div>

            <!-- Custom Animations -->
            <style>
        .animate-gradient-move {
            animation: gradientMove 8s ease-in-out infinite alternate;
            will-change: transform;
        }
        @keyframes gradientMove {
            0% { transform: translate(-50%, 0) scale(1); }
            100% { transform: translate(-50%, 40px) scale(1.1); }
        }
        .animate-float { animation: float 3s ease-in-out infinite; }
        .animate-float.delay-100 { animation-delay: 0.1s; }
        .animate-float.delay-200 { animation-delay: 0.2s; }
        .animate-float.delay-300 { animation-delay: 0.3s; }
        .animate-float.delay-400 { animation-delay: 0.4s; }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }
        .animate-float-slow { animation: floatSlow 7s ease-in-out infinite alternate; }
        @keyframes floatSlow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-24px); }
        }
        .animate-bounce-slow { animation: bounceSlow 2.5s infinite alternate; }
        @keyframes bounceSlow {
            0% { transform: translateY(0) scale(1); }
            100% { transform: translateY(-10px) scale(1.1); }
        }
        .animate-glow { animation: glow 2s ease-in-out infinite alternate; }
        @keyframes glow {
            0% { opacity: 0.5; filter: blur(8px); }
            100% { opacity: 1; filter: blur(16px); }
        }
        .animate-glow-pulse { animation: glowPulse 1.5s infinite alternate; }
        @keyframes glowPulse {
            0% { opacity: 0.1; }
            100% { opacity: 0.4; }
        }
        .animate-fade-in { animation: fadeIn 1.2s cubic-bezier(.4,0,.2,1) both; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes starPulse {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.25); opacity: 0.85; }
        }
        .animate-star-pulse {
            animation: starPulse 1.2s cubic-bezier(.4,0,.2,1) infinite;
        }

        @media (prefers-reduced-motion: reduce) {
            .animate-gradient-move,
            .animate-float,
            .animate-float-slow,
            .animate-bounce-slow,
            .animate-glow,
            .animate-glow-pulse,
            .animate-fade-in,
            .animate-star-pulse {
                animation: none;
            }
        }
            </style>
            </div>

            <!-- Custom Animations -->
            <style>
        .animate-gradient-move {
            animation: gradientMove 8s ease-in-out infinite alternate;
            will-change: transform;
        }
        @keyframes gradientMove {
            0% { transform: translate(-50%, 0) scale(1); }
            100% { transform: translate(-50%, 40px) scale(1.1); }
        }
        .animate-float { animation: float 3s ease-in-out infinite; }
        .animate-float.delay-100 { animation-delay: 0.1s; }
        .animate-float.delay-200 { animation-delay: 0.2s; }
        .animate-float.delay-300 { animation-delay: 0.3s; }
        .animate-float.delay-400 { animation-delay: 0.4s; }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }
        .animate-float-slow { animation: floatSlow 7s ease-in-out infinite alternate; }
        @keyframes floatSlow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-24px); }
        }
        .animate-bounce-slow { animation: bounceSlow 2.5s infinite alternate; }
        @keyframes bounceSlow {
            0% { transform: translateY(0) scale(1); }
            100% { transform: translateY(-10px) scale(1.1); }
        }
        .animate-glow { animation: glow 2s ease-in-out infinite alternate; }
        @keyframes glow {
            0% { opacity: 0.5; filter: blur(8px); }
            100% { opacity: 1; filter: blur(16px); }
        }
        .animate-glow-pulse { animation: glowPulse 1.5s infinite alternate; }
        @keyframes glowPulse {
            0% { opacity: 0.1; }
            100% { opacity: 0.4; }
        }
        .animate-fade-in { animation: fadeIn 1.2s cubic-bezier(.4,0,.2,1) both; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes starPulse {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.25); opacity: 0.85; }
        }
        .animate-star-pulse {
            animation: starPulse 1.2s cubic-bezier(.4,0,.2,1) infinite;
        }

        @media (prefers-reduced-motion: reduce) {
            .animate-gradient-move,
            .animate-float,
            .animate-float-slow,
            .animate-bounce-slow,
            .animate-glow,
            .animate-glow-pulse,
            .animate-fade-in,
            .animate-star-pulse {
                animation: none;
            }
        }
            </style>
    </div>

    <!-- Custom Animations -->
    <style>
        .animate-gradient-move {
            animation: gradientMove 8s ease-in-out infinite alternate;
            will-change: transform;
        }
        @keyframes gradientMove {
            0% { transform: translate(-50%, 0) scale(1); }
            100% { transform: translate(-50%, 40px) scale(1.1); }
        }
        .animate-float { animation: float 3s ease-in-out infinite; }
        .animate-float.delay-100 { animation-delay: 0.1s; }
        .animate-float.delay-200 { animation-delay: 0.2s; }
        .animate-float.delay-300 { animation-delay: 0.3s; }
        .animate-float.delay-400 { animation-delay: 0.4s; }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }
        .animate-float-slow { animation: floatSlow 7s ease-in-out infinite alternate; }
        @keyframes floatSlow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-24px); }
        }
        .animate-bounce-slow { animation: bounceSlow 2.5s infinite alternate; }
        @keyframes bounceSlow {
            0% { transform: translateY(0) scale(1); }
            100% { transform: translateY(-10px) scale(1.1); }
        }
        .animate-glow { animation: glow 2s ease-in-out infinite alternate; }
        @keyframes glow {
            0% { opacity: 0.5; filter: blur(8px); }
            100% { opacity: 1; filter: blur(16px); }
        }
        .animate-glow-pulse { animation: glowPulse 1.5s infinite alternate; }
        @keyframes glowPulse {
            0% { opacity: 0.1; }
            100% { opacity: 0.4; }
        }
        .animate-fade-in { animation: fadeIn 1.2s cubic-bezier(.4,0,.2,1) both; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes starPulse {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.25); opacity: 0.85; }
        }
        .animate-star-pulse {
            animation: starPulse 1.2s cubic-bezier(.4,0,.2,1) infinite;
        }

        @media (prefers-reduced-motion: reduce) {
            .animate-gradient-move,
            .animate-float,
            .animate-float-slow,
            .animate-bounce-slow,
            .animate-glow,
            .animate-glow-pulse,
            .animate-fade-in,
            .animate-star-pulse {
                animation: none;
            }
        }
    </style>
</section>
