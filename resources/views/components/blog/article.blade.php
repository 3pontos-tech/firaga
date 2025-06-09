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

<article class="pb-8">
    <div class="container mx-auto px-4 md:px-8">
        <div class="max-w-4xl mx-auto" style="opacity: 1; will-change: opacity, transform; transform: none;">
            <a href="/blog" class="inline-flex items-center gap-2 text-brand hover:text-brand-hover mb-8">
                <x-heroicon-c-arrow-left class="h-4 w-4"/>
                Voltar ao Blog
            </a>
            <div class="relative h-64 md:h-96 mb-12 rounded-xl overflow-hidden">
                <img
                    alt="Como Alcançar a Independência Financeira em 5 Passos" loading="lazy" decoding="async"
                    data-nimg="fill" class="object-cover"
                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                    src="https://github.com/danielhe4rt.png">
            </div>
            <div class="mb-6">
                <span class="bg-brand text-body px-4 py-2 rounded-full text-sm font-semibold">
                    {{ $category ?? 'Code' }}
                </span>
            </div>
            <h1 class="text-3xl text-heading font-bold mb-6 md:text-4xl lg:text-5xl">
                {{ $title }}
            </h1>
            <div class="flex flex-wrap  items-center gap-6 text-body mb-8 pb-8 border-b border-zinc-800">
                <div class="flex items-center gap-2">
                    <x-heroicon-c-calendar class="h-4 w-4"/>
                    {{ $publishedAt->format('d/m/Y') }}
                </div>
                <div class="flex items-center gap-2">
                    <x-heroicon-c-clock class="h-3 w-3"/>
                    {{ $readTimeInMinutes }} minutos de leitura
                </div>
                <div>
                    Por {{ $author }}
                </div>
                <button
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 ml-auto">
                    <x-heroicon-m-share class="w-4 h-4"/>
                    Compartilhar
                </button>
            </div>
            <div class="prose prose-invert prose-fire max-w-none text-body">
                {!! $content !!}
            </div>
            <div class="mt-12 pt-8 border-t border-zinc-800"><h3
                    class="text-sm font-semibold text-body mb-4">Tags:</h3>
                <div class="flex flex-wrap gap-2">
                    <span
                        class="bg-surface text-body px-3 py-1 rounded-full text-sm hover:bg-deep transition-colors">#independência financeira</span><span
                        class="bg-surface text-body px-3 py-1 rounded-full text-sm hover:bg-deep transition-colors">#investimentos</span><span
                        class="bg-surface text-body px-3 py-1 rounded-full text-sm hover:bg-deep transition-colors">#planejamento</span>
                </div>
            </div>
        </div>
    </div>
</article>
