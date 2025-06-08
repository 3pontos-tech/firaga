@props([
    'title' => 'Conhecimento Financeiro',
    'description' => 'Insights, estratégias e conhecimento especializado para acelerar sua jornada rumo à independência financeira.',
])
<section class="relative py-24 bg-gradient-to-b from-zinc-900 to-black">
    <div class="container mx-auto px-4 md:px-8">
        <div class="max-w-4xl mx-auto text-center"
             style="opacity: 1; will-change: opacity, transform; transform: none;">
            <div class="flex items-center justify-center gap-4 mb-6">
                <div class="h-1 w-12 bg-fire-500"></div>
                <span
                    class="text-sm font-semibold uppercase tracking-wider text-fire-500">{{ $title }}</span>
                <div class="h-1 w-12 bg-fire-500"></div>
            </div>
            <h1 class="text-4xl font-bold mb-6 md:text-5xl lg:text-6xl">Blog <span
                    class="text-fire-500">{{ config('app.name') }}</span></h1>
            <p class="text-lg text-zinc-400 md:text-xl max-w-2xl mx-auto">
                {{ $description }}
            </p>
        </div>
    </div>
</section>
