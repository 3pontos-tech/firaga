<!-- Card Section: “Se você guarda dinheiro...” -->
<section class="bg-black dark:bg-gray-900 text-white dark:text-gray-100 py-20">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-center bg-gradient-to-br from-black via-gray-900 to-black dark:from-black dark:via-gray-900 dark:to-black rounded-2xl overflow-hidden animate-shadow-pulse transition-shadow duration-300 animate-fade-in">
            <!-- Left Content -->
            <div class="lg:w-1/2 px-8 py-12 bg-white/10 dark:bg-black/20 backdrop-blur-xl rounded-3xl border border-white/20 dark:border-gray-800 animate-fade-in">
                <h3 class="text-3xl sm:text-4xl font-extrabold leading-snug mb-6 tracking-tight">
                    SE VOCÊ GUARDA DINHEIRO,<br>
                    MAS NÃO SABE COMO<br>
                    <span class="text-orange-500 animate-pulse">POTENCIALIZAR</span>
                </h3>
                <p class="text-gray-200 mb-8 leading-relaxed text-lg animate-fade-in delay-200">
                    Poupar sem estratégia não te leva a lugar nenhum.
                    Você já guarda dinheiro, mas será que está realmente aproveitando seu potencial?
                    Criamos um planejamento financeiro alinhado com seus objetivos,
                    transformando sua reserva em um plano sólido de crescimento.
                    Chegou a hora de fazer suas economias trabalharem para você. Vamos juntos?
                </p>
                <div class="flex items-center space-x-4">
                    <!-- “SAIBA MAIS” Text -->
                    <span class="uppercase text-sm tracking-widest text-orange-400 hover:text-orange-500 cursor-pointer transition font-semibold animate-fade-in delay-300">
                        Saiba mais
                    </span>
                    <!-- Circular Button with Arrow -->
                    <a href="#planejamento" class="relative w-12 h-12 border-2 border-orange-500 rounded-full flex items-center justify-center hover:bg-orange-500 group transition animate-pulse">
                        <svg
                            class="w-5 h-5 text-orange-500 group-hover:text-white transition"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <!-- Right Image with Curved Edge -->
            <div class="lg:w-1/2 w-full h-80 lg:h-auto relative overflow-hidden group">
                <div class="absolute inset-0 overflow-hidden rounded-l-[100px] border-4 border-orange-500/30 animate-border-glow">
                    <img
                        src="https://github.com/danielhe4rt.png"
                        alt="Planejamento Financeiro"
                        class="object-cover w-full h-full scale-105 group-hover:scale-110 transition-transform duration-500 ease-in-out animate-fade-in delay-200"
                    />
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes border-glow {
  0%,
  100% {
    box-shadow: 0 0 0 0 #ff4a17;
  }
  50% {
    box-shadow: 0 0 40px 10px #ff4a17;
  }
}
.animate-border-glow {
  animation: border-glow 3s ease-in-out infinite;
}
@keyframes shadow-pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(249, 115, 22, 0.5);
    }
    7% { /* 20ms de 300ms */
        box-shadow: 0 0 10px 2px rgba(249, 115, 22, 0.6);
    }
    33% { /* 100ms de 300ms */
        box-shadow: 0 0 30px 8px rgba(249, 115, 22, 0.7);
    }
    60% { /* 180ms de 300ms */
        box-shadow: 0 0 40px 14px rgba(249, 115, 22, 0.8);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(249, 115, 22, 0.5);
    }
}
.animate-shadow-pulse {
    animation: shadow-pulse 0.3s cubic-bezier(0.4,0,0.2,1) infinite;
}
</style>
