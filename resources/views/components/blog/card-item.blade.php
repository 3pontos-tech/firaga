@props([
    'title' => 'Investimentos Estratégicos para Profissionais de TI',
    'subtitle' => 'Como profissionais de tecnologia podem otimizar seus investimentos e aproveitar as oportunidades do mercado digital.',
    'author' => 'Carlos Silva',
    'role' => 'Especialista em Planejamento Financeiro',
    'authorAvatar' => 'https://github.com/danielhe4rt.png',
    'readTimeInMinutes' => 6,
    'publishedAt' => now()->subDays(3),
    'url' => 'investimentos-para-profissionais-de-ti',
    'cover' => 'https://github.com/danielhe4rt.png'
])

<div style="opacity: 1; will-change: opacity, transform; transform: none;">
    <a href="/blog/investimentos-para-profissionais-de-ti">
        <article
            class="group bg-surface rounded-xl overflow-hidden hover:bg-deep transition-all duration-300">
            <div class="relative h-48 overflow-hidden">
                <img
                    alt="Investimentos Estratégicos para Profissionais de TI" loading="lazy"
                    decoding="async" data-nimg="fill"
                    class="object-cover transition-transform duration-300 group-hover:scale-105"
                    style="position: absolute; height: 100%; width: 100%; inset: 0; color: transparent;"
                    src="{{ $cover }}">
                <div class="absolute top-4 left-4">
                    <span class="bg-fire-500 text-black px-3 py-1 rounded-full text-xs font-semibold">
                        Code Capital
                    </span>
                </div>
            </div>
            <div class="p-6">
                <div class="flex items-center gap-4 text-xs text-zinc-400 mb-3">
                    <div class="flex items-center gap-1">
                        <x-heroicon-c-calendar class="h-3 w-3"/>
                        09/01/2024
                    </div>
                    <div class="flex items-center gap-1">
                        <x-heroicon-c-clock class="h-3 w-3"/>
                        6 min
                    </div>
                </div>
                <h3 class="text-lg text-heading font-bold mb-3 group-hover:text-fire-500 transition-colors">
                    Investimentos Estratégicos para Profissionais de TI
                </h3>
                <p class="text- text-sm mb-4 line-clamp-3">
                    Como profissionais de
                    tecnologia podem otimizar seus investimentos e aproveitar as oportunidades
                    do mercado digital.
                </p>
                <div class="flex items-center justify-between"><span
                        class="text-xs text-zinc-500">Por </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-arrow-right h-4 w-4 text-fire-500 group-hover:translate-x-1 transition-transform">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </div>
            </div>
        </article>
    </a>
</div>
