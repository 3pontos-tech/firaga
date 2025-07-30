@props([
    'badge' => 'Trabalhe conosco',
    'heading' => 'Trabalhe conosco',
    'subheading' => 'Transformamos a forma como as pessoas lidam com dinheiro, capacitando-as a conquistar liberdade, segurança e crescimento financeiro sustentável.',
])
<section class="relative overflow-hidden min-h-[55vh] flex items-center justify-center bg-elevation-02dp">
    <!-- Background Image with Shadow -->
    <div class="absolute inset-0 z-0">
        <img src="{{ $renderable?->getFirstMediaUrl(App\Enums\CustomComponent::HeroWithBackgroundImage->value) ?? asset('images/stock/work-with-us-hero.jpg') }}" alt="Trabalhe conosco" class="w-full h-full object-cover object-top">
        <div class="absolute inset-0 bg-gradient-to-t from-elevation-surface to-elevation-surface/20 bg-elevation-surface/50"></div>
    </div>

    <div class="max-w-4xl mx-auto text-center relative z-10">
        <div class="flex items-center justify-center gap-4 mb-6">
            <div class="h-1 w-12 bg-primary"></div>
                <x-layout.shared.chip variant="custom" class="px-4 py-2 bg-icon-high text-brand-primary">
                    {{ $badge }}
                </x-layout.shared.chip>
            <div class="h-1 w-12 bg-primary"></div>
        </div>

        <h1 class="text-7xl font-bold text-text-high mb-6 md:text-5xl lg:text-6xl">
            {{  $heading }}
        </h1>
        <p class="text-text-high text-lg max-w-5xl mx-auto">
            {{ $subheading }}
        </p>
    </div>
</section>
