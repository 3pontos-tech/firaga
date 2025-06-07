@props([
    'title' => '',
    'description' => '',
    'index' => '',
    'backgroundImage' => 'null'
])

<div class="relative border border-orange-500/40 rounded-xl p-8 bg-white/10 dark:bg-gray-900/30 backdrop-blur-xl shadow-lg hover:scale-[1.03] hover:shadow-orange-500/30 transition-transform duration-300 group animate-fade-in overflow-hidden">
    <!-- Imagem de fundo que será revelada no hover -->
    <div class="absolute inset-0 bg-cover bg-center opacity-0 group-hover:opacity-15 transition-opacity duration-500"
         style="background-image: url('{{ $backgroundImage }}');">
    </div>

    <div class="relative z-10">
        <h3 class="text-xl font-semibold mb-2 mt-4">{{ str($title) }}</h3>
        <p class="text-gray-300 leading-relaxed">
            {{ str($description)->wordWrap(8) }}
        </p>
    </div>
</div>
