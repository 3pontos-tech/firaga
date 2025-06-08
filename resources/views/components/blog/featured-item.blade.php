@props([
    'title' => 'Investimentos Estratégicos para Profissionais de TI',
    'subtitle' => 'Como profissionais de tecnologia podem otimizar seus investimentos e aproveitar as oportunidades do mercado digital.',
    'author' => 'Carlos Silva',
    'authorRole' => 'Especialista em Planejamento Financeiro',
    'authorAvatar' => 'https://github.com/danielhe4rt.png',
    'readTimeInMinutes' => 6,
    'publishedAt' => now()->subDays(3),
    'slug' => 'investimentos-para-profissionais-de-ti',
    'coverImage' => 'https://github.com/danielhe4rt.png',
])

<a href="/blog/como-alcancar-independencia-financeira">
    <article
        class="group bg-gradient-to-br from-zinc-900 to-zinc-800 rounded-2xl overflow-hidden hover:from-zinc-800 hover:to-zinc-700 transition-all duration-300"
        style="will-change: transform; transform: translateY(0.00532029px);">
        <div class="grid md:grid-cols-2 gap-0">
            <div class="relative h-32 md:h-80 overflow-hidden"><img
                    alt="Como Alcançar a Independência Financeira em 5 Passos" loading="lazy"
                    decoding="async" data-nimg="fill"
                    class="object-cover transition-transform duration-300 group-hover:scale-105"
                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                    src="{{ $coverImage ?? '/placeholder.svg?height=300&width=600' }}">
                <div class="absolute top-4 left-4"><span
                        class="bg-fire-500 text-black px-3 py-1 rounded-full text-xs font-semibold">Planejamento</span>
                </div>
            </div>
            <div class="p-8 flex flex-col justify-center">
                <div class="flex items-center gap-4 text-xs text-zinc-400 mb-4">
                    <div class="flex items-center gap-1">
                        <x-heroicon-c-calendar class="h-3 w-3"/>
                        {{ $publishedAt->format('d/m/Y') }}
                    </div>
                    <div class="flex items-center gap-1">
                        <x-heroicon-c-clock class="h-3 w-3"/>
                        {{ $readTimeInMinutes }}
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-4 group-hover:text-fire-500 transition-colors">
                    {{ $title }}
                </h3>
                <p class="text-zinc-400 mb-6 line-clamp-3">
                    {{ $subtitle }}
                </p>
                <div class="flex items-center gap-3">
                    <img alt="Carlos Silva" loading="lazy"
                         width="32" height="32"
                         decoding="async" data-nimg="1"
                         class="rounded-full"
                         style="color: transparent;"
                         src="{{ $authorAvatar }}">
                    <div>
                        <p class="text-sm font-medium">{{ $author }}</p>
                        <p class="text-xs text-zinc-400">{{ $authorRole }}</p>
                    </div>
                </div>
            </div>
        </div>
    </article>
</a>


