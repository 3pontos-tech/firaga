@props([
    'subheading' => 'Blog Fire|ce',
    'heading' => 'Conteúdo que transforma',
    'description' => 'Transformamos a forma como as pessoas lidam com dinheiro, capacitando-as a conquistar liberdade, segurança e crescimento financeiro sustentável.',
])
<section class="relative overflow-hidden min-h-[55vh] flex items-center justify-center bg-elevation-02dp">
    <div class="max-w-4xl mx-auto text-center">
        <div class="flex items-center justify-center gap-4 mb-6">
            <div class="h-1 w-12 bg-primary"></div>
                <x-layout.shared.chip class="px-4 py-2">
                    {{ $subheading }}
                </x-layout.shared.chip>
            <div class="h-1 w-12 bg-primary"></div>
        </div>

        <h1 class="text-7xl font-bold text-text-high mb-6 md:text-5xl lg:text-6xl">
            {{ $slot ?? $heading }}
        </h1>
        <p class="text-text-medium text-lg max-w-5xl mx-auto">
            {{ $description }}
        </p>
    </div>
</section>
