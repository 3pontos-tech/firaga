@props([
    'title' => '',
    'description' => '',
    'index' => '',
    'backgroundImage' => 'null'
])

<div class="relative border border-brand-hover rounded-xl p-8 bg-surface backdrop-blur-xl shadow-lg hover:scale-[1.03] hover:shadow-brand transition-transform duration-300 group animate-fade-in overflow-hidden">
    <!-- Imagem de fundo que será revelada no hover -->
    <div class="absolute inset-0 bg-cover bg-center opacity-0 group-hover:opacity-15 transition-opacity duration-500"
         style="background-image: url('{{ $backgroundImage }}');">
    </div>

    <div class="relative z-10">
        <h3 class="text-xl font-semibold mb-2 mt-4">{{ str($title) }}</h3>
        <p class="text-body leading-relaxed">
            {{ str($description)->wordWrap(8) }}
        </p>
    </div>
</div>
