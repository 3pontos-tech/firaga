<!-- CTA Section: “Acesse nosso blog” -->
<section class="relative bg-gradient-to-br from-gray-900 via-black to-gray-900 dark:from-gray-900 dark:via-black dark:to-gray-900 text-white dark:text-white py-20 overflow-hidden">
    <!-- Animated Gradient Overlay -->
    <div class="absolute inset-0 pointer-events-none z-0">
        <div class="absolute left-1/2 top-0 w-2/3 h-2/3 -translate-x-1/2 blur-3xl opacity-40 animate-gradient-move rounded-full bg-gradient-to-tr from-orange-500 via-pink-500 to-purple-600"></div>
        <div class="absolute bottom-0 right-0 w-1/4 h-1/4 blur-2xl opacity-30 animate-float-slow bg-gradient-to-br from-orange-400 via-yellow-500 to-pink-500 rounded-full"></div>
    </div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="bg-white/10 dark:bg-gray-900/30 backdrop-blur-xl rounded-2xl p-10 lg:flex lg:items-center lg:justify-between lg:space-x-8 shadow-2xl border border-orange-500/20 animate-fade-in overflow-hidden">
            <!-- Left: Icon -->
            <div class="flex-shrink-0 mb-8 lg:mb-0 animate-bounce">
                <span class="relative inline-block">
                    <span class="absolute inset-0 rounded-full bg-gradient-to-tr from-orange-400 via-pink-500 to-yellow-400 blur-md opacity-60 animate-glow"></span>
                    <x-heroicon-c-lock-open class="w-14 h-14 text-orange-500 relative z-10"/>
                </span>
            </div>
            <!-- Middle: Text Content -->
            <div class="flex-1 text-center lg:text-left mb-8 lg:mb-0">
                <h3 class="text-2xl sm:text-3xl font-extrabold mb-4">
                    <span>Acesse nosso</span>
                    <span class="italic text-orange-400"> blog</span>
                    <span> para ter as melhores </span>
                    <span class="font-bold text-orange-500">matérias</span>
                </h3>
                <p class="text-gray-300 text-lg">
                    Agende uma análise e tenha controle <br class="hidden md:inline" />
                    de sua vida financeira para sempre.
                </p>
            </div>
            <!-- Right: Button -->
            <div class="flex-shrink-0">
                <a
                    href="/blog"
                    class="relative inline-flex items-center bg-orange-500 text-white font-semibold px-8 py-4 rounded-full shadow-lg hover:bg-orange-600 transition text-lg overflow-hidden group focus:outline-none focus:ring-2 focus:ring-orange-400"
                    aria-label="Ir para o blog"
                >
                    <span class="absolute inset-0 bg-gradient-to-r from-orange-400 via-pink-500 to-yellow-400 opacity-0 group-hover:opacity-30 transition-all blur-lg animate-glow-pulse"></span>
                    <span class="relative z-10 group-hover:scale-105 transition-transform">IR PARA O BLOG</span>
                    <svg class="w-6 h-6 ml-3 relative z-10 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                </a>
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
