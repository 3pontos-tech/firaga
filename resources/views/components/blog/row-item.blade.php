@props([
    'title' => 'Investimentos Estratégicos para Profissionais de TI',
    'subtitle' => 'Como profissionais de tecnologia podem otimizar seus investimentos e aproveitar as oportunidades do mercado digital.',
    'author' => 'Carlos Silva',
    'role' => 'Especialista em Planejamento Financeiro',
    'authorAvatar' => 'https://github.com/danielhe4rt.png',
    'readTimeInMinutes' => 6,
    'publishedAt' => now()->subDays(3),
    'url' => 'investimentos-para-profissionais-de-ti',
])

<div>
    <a
        href="{{ $url }}">
        <article
            class="group bg-zinc-900 rounded-xl overflow-hidden hover:bg-zinc-800 transition-all duration-300"
        >
            <div class="grid md:grid-cols-[200px_1fr_auto] gap-6 p-6">
                <div class="relative h-48 overflow-hidden rounded-lg">
                    <img
                        alt="Investimentos Estratégicos para Profissionais de TI"
                        loading="lazy" decoding="async" data-nimg="fill"
                        class="object-cover transition-transform duration-300 group-hover:scale-105"
                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                        src="{{ $authorAvatar }}">
                    <div class="absolute top-2 left-2">
                        <span class="bg-fire-500 text-black px-2 py-1 rounded text-xs font-semibold">Code Capital</span>
                    </div>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-4 text-xs text-zinc-400 mb-2">
                        <div class="flex items-center gap-1">
                            <x-heroicon-c-calendar class="h-3 w-3"/>
                            {{ $publishedAt->format('d/m/Y') }}
                        </div>
                        <div class="flex items-center gap-1">
                            <x-heroicon-c-clock class="h-3 w-3"/>
                            {{ $readTimeInMinutes }}
                        </div>
                    </div>
                    <h3 class="text-lg font-bold mb-2 group-hover:text-fire-500 transition-colors line-clamp-2">
                        {{ $title }}
                    </h3>
                    <p class="text-zinc-400 text-sm mb-3 line-clamp-2">
                        {{ $subtitle }}
                    </p>
                    <div class="flex items-center gap-2">
                        <img alt="{{ $author }}" loading="lazy"
                             width="24" height="24"
                             decoding="async" data-nimg="1"
                             class="rounded-full"
                             style="color: transparent;"
                             src="{{ $authorAvatar }}">
                        <span class="text-xs text-zinc-500">{{ $author }}</span>
                    </div>
                </div>
                <div class="flex items-center">
                    <x-heroicon-c-arrow-right
                        class="h-5 w-5 text-fire-500 group-hover:translate-x-1 transition-transform"/>
                </div>
            </div>
        </article>
    </a></div>
