@props([
    'subheading' => 'Conhecimento Financeiro',
    'heading' => 'Blog',
    'description' => 'Insights, estratégias e conhecimento especializado para acelerar sua jornada rumo à independência financeira.',
])
<section class="relative overflow-hidden py-20 bg-linear-to-br from-base-200 via-base-300 to-base-200">
    <div class="max-w-4xl mx-auto text-center">
        <div class="flex items-center justify-center gap-4 mb-6">
            <div class="h-1 w-12 bg-primary"></div>
            <span
                class="text-sm font-semibold uppercase tracking-wider text-base-content">
                    {{ $subheading }}
                </span>
            <div class="h-1 w-12 bg-primary"></div>
        </div>

        <h1 class="text-4xl font-bold text-base-content mb-6 md:text-5xl lg:text-6xl">
            {{ $slot ?? $heading }}
        </h1>
        <p class="text-lg text-base-content/90 md:text-xl max-w-2xl mx-auto">
            {{ $description }}
        </p>
    </div>

</section>
