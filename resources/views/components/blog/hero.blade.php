@props([
    'title' => 'Conhecimento Financeiro',
    'description' => 'Insights, estratégias e conhecimento especializado para acelerar sua jornada rumo à independência financeira.',
])
<section class="relative overflow-hidden py-24 bg-gradient-to-b">
    <div class="absolute inset-0 pointer-events-none blur-[2px] animate-gradient-x z-0">
        <x-blocks.grid-background/>
    </div>
    <div class="container mx-auto px-4 md:px-8 z-11">

        <div class="max-w-4xl mx-auto text-center"
             style="opacity: 1; will-change: opacity, transform; transform: none;">
            <div class="flex items-center justify-center gap-4 mb-6">
                <div class="h-1 w-12 bg-fire-500"></div>
                <span
                    class="text-sm font-semibold uppercase tracking-wider text-body">{{ $title }}</span>
                <div class="h-1 w-12 bg-fire-500"></div>
            </div>

            <h1 class="text-4xl font-bold text-heading mb-6 md:text-5xl lg:text-6xl">Blog <span
                    class="text-brand">{{ config('app.name') }}</span></h1>
            <p class="text-lg text-body md:text-xl max-w-2xl mx-auto">
                {{ $description }}
            </p>
        </div>
    </div>
</section>
