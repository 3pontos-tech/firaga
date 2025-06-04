<!-- Testimonial Section -->
<section id="depoimentos" class="relative bg-gradient-to-br from-black via-gray-900 to-black dark:from-black dark:via-gray-900 dark:to-black text-white dark:text-white py-28 overflow-hidden">
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
            <!-- Glassmorphism Quote Card -->
            <blockquote class="relative bg-white/10 dark:bg-gray-900/30 backdrop-blur-xl rounded-2xl shadow-xl border border-orange-500/30 px-8 py-10 mb-12 overflow-hidden animate-fade-in">
                <!-- Animated Quote Mark -->
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
            <!-- Author Info and Button -->
            <div class="flex items-center space-x-6">
                <!-- Avatar with Glowing Border -->
                <div class="relative">
                    <span class="absolute inset-0 rounded-full bg-gradient-to-tr from-orange-400 via-pink-500 to-yellow-400 blur-md opacity-60 animate-glow"></span>
                    <img
                        src="https://github.com/danielhe4rt.png"
                        alt="Marcos Henrique Diogenes"
                        class="w-16 h-16 rounded-full object-cover border-4 border-orange-500 shadow-lg relative z-10"
                    />
                </div>
                <div>
                    <div class="text-white font-bold text-lg">Marcos Henrique Diogenes</div>
                    <div class="text-orange-400 text-sm font-medium">Cliente Premium</div>
                </div>
                <!-- “Todos os Reviews” Button with Glow and Micro-interaction -->
                <a
                    href="/todos-reviews"
                    class="ml-auto relative bg-orange-500 text-white font-semibold px-5 py-2 rounded-full flex items-center space-x-2 shadow-lg overflow-hidden transition group focus:outline-none focus:ring-2 focus:ring-orange-400"
                    aria-label="Ver todos os reviews"
                >
                    <span class="absolute inset-0 bg-gradient-to-r from-orange-400 via-pink-500 to-yellow-400 opacity-0 group-hover:opacity-30 transition-all blur-lg animate-glow-pulse"></span>
                    <span class="relative z-10 group-hover:scale-105 transition-transform">TODOS OS REVIEWS</span>
                    <svg class="w-5 h-5 text-white relative z-10 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
        </div>

        <!-- Right Column: Stylized Orange Shape with Portrait -->
        <div class="mt-12 lg:mt-0 lg:w-1/2 flex justify-center">
            <div class="relative w-72 h-72 lg:w-96 lg:h-96">
                <!-- Orange background shape with glow -->
                <div
                    class="absolute inset-0 bg-orange-500 rounded-tr-3xl rounded-br-3xl rounded-bl-3xl shadow-2xl shadow-orange-500/30"
                ></div>
                <!-- Circular portrait positioned over shape -->
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-40 h-40 lg:w-56 lg:h-56 rounded-full overflow-hidden bg-white border-4 border-orange-500 shadow-lg"
                >
                    <img
                        src="https://github.com/danielhe4rt.png"
                        alt="Marcos Henrique Diogenes"
                        class="object-cover w-full h-full"
                    />
                </div>
            </div>
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
        .animate-float { animation: float 3s ease-in-out infinite; }
        .animate-float.delay-100 { animation-delay: 0.1s; }
        .animate-float.delay-200 { animation-delay: 0.2s; }
        .animate-float.delay-300 { animation-delay: 0.3s; }
        .animate-float.delay-400 { animation-delay: 0.4s; }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
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
    </style>
</section>
