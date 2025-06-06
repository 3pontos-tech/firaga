<!-- “Nossas Soluções” Section -->
<section id="nossas-solucoes" class="relative bg-gradient-to-br from-black via-gray-900 to-black dark:from-black dark:via-gray-900 dark:to-black text-white dark:text-white py-28 overflow-hidden">
    <!-- Animated Gradient Overlay -->
    <div class="absolute inset-0 pointer-events-none z-0">
        <div class="absolute left-1/2 top-0 w-2/3 h-2/3 -translate-x-1/2 blur-3xl opacity-40 animate-gradient-move rounded-full bg-gradient-to-tr from-orange-500 via-pink-500 to-purple-600"></div>
        <div class="absolute bottom-0 right-0 w-1/4 h-1/4 blur-2xl opacity-30 animate-float-slow bg-gradient-to-br from-orange-400 via-yellow-500 to-pink-500 rounded-full"></div>
    </div>
    <div class="container mx-auto px-6 relative z-10">
        <!-- Header: Title + Intro Text -->
        <div class="lg:flex lg:items-start lg:justify-between mb-16">
            <h2 class="text-4xl lg:text-5xl font-extrabold leading-tight tracking-tight">
                NOSSAS <span class="text-orange-500">SOLUÇÕES</span>
            </h2>
            <p class="mt-6 lg:mt-0 lg:w-1/2 text-gray-300 leading-relaxed text-lg">
                Na Fire|Ce, entendemos que cada pessoa tem desafios únicos e objetivos diferentes.
                Por isso, oferecemos soluções que se adaptam às suas necessidades,
                desde o nível básico ao avançado.
            </p>
        </div>
        <!-- Animated Divider Line -->
        <div class="border-t-2 border-orange-500/30 animate-divider-glow mb-4"></div>
        <!-- Solution Items -->
        <div class="divide-y divide-gray-800">
            <!-- Items -->
            @foreach($solutionsData as $solution)
                <x-cards.cardLink :title="$solution['title']" :description="$solution['description']" :route="$solution['route']" />
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
        .animate-divider-glow { animation: dividerGlow 2.5s infinite alternate; }
        @keyframes dividerGlow {
            0% { box-shadow: 0 0 0 0 rgba(255, 165, 0, 0.2); }
            100% { box-shadow: 0 0 24px 4px rgba(255, 165, 0, 0.15); }
        }
        .animate-fade-in { animation: fadeIn 1.2s cubic-bezier(.4,0,.2,1) both; }
        .animate-fade-in.delay-100 { animation-delay: 0.1s; }
        .animate-fade-in.delay-200 { animation-delay: 0.2s; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-icon-float { animation: iconFloat 3s ease-in-out infinite; }
        @keyframes iconFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px) scale(1.08); }
        }
        .animate-arrow-glow { animation: arrowGlow 1.5s infinite alternate; }
        @keyframes arrowGlow {
            0% { filter: drop-shadow(0 0 0px orange); }
            100% { filter: drop-shadow(0 0 8px orange); }
        }
    </style>
</section>
