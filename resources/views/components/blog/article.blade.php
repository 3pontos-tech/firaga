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
    'category' => 'Code',
    'content' => collect([
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
    ])->map(fn($paragraph) => "<p>{$paragraph}</p>")->implode(''),
])

<article class="py-12">
    <div class="container mx-auto px-4 md:px-8">
        <div class="max-w-4xl mx-auto" style="opacity: 1; will-change: opacity, transform; transform: none;">
            <a href="/blog" class="inline-flex items-center gap-2 text-fire-500 hover:text-fire-400 mb-8">
                <x-heroicon-c-arrow-left class="h-4 w-4"/>
                Voltar ao Blog
            </a>
            <div class="mb-6">
                <span class="bg-fire-500 text-black px-4 py-2 rounded-full text-sm font-semibold">
                    {{ $category ?? 'Code' }}
                </span>
            </div>
            <h1 class="text-3xl font-bold mb-6 md:text-4xl lg:text-5xl">
                {{ $title }}
            </h1>
            <div class="flex flex-wrap items-center gap-6 text-zinc-400 mb-8 pb-8 border-b border-zinc-800">
                <div class="flex items-center gap-2">
                    <x-heroicon-c-calendar class="h-4 w-4"/>
                    {{ $publishedAt->format('d/m/Y') }}
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="lucide lucide-clock h-4 w-4">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    {{ $readTimeInMinutes }} min de leitura
                </div>
                <div>Por</div>
                <button
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 ml-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="lucide lucide-share2 h-4 w-4 mr-2">
                        <circle cx="18" cy="5" r="3"></circle>
                        <circle cx="6" cy="12" r="3"></circle>
                        <circle cx="18" cy="19" r="3"></circle>
                        <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line>
                        <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line>
                    </svg>
                    Compartilhar
                </button>
            </div>
            <div class="relative h-64 md:h-96 mb-12 rounded-xl overflow-hidden"><img
                    alt="Como Alcançar a Independência Financeira em 5 Passos" loading="lazy" decoding="async"
                    data-nimg="fill" class="object-cover"
                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                    src="/placeholder.svg?height=400&amp;width=600"></div>
            <div class="prose prose-invert prose-fire max-w-none">
                {{ $content }}
            </div>
            <div class="mt-12 pt-8 border-t border-zinc-800"><h3
                    class="text-sm font-semibold text-zinc-400 mb-4">Tags:</h3>
                <div class="flex flex-wrap gap-2"><span
                        class="bg-zinc-800 text-zinc-300 px-3 py-1 rounded-full text-sm hover:bg-zinc-700 transition-colors">#independência financeira</span><span
                        class="bg-zinc-800 text-zinc-300 px-3 py-1 rounded-full text-sm hover:bg-zinc-700 transition-colors">#investimentos</span><span
                        class="bg-zinc-800 text-zinc-300 px-3 py-1 rounded-full text-sm hover:bg-zinc-700 transition-colors">#planejamento</span>
                </div>
            </div>
        </div>
    </div>
</article>
