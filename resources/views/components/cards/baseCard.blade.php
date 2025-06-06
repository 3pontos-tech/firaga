@props([
    'title' => '',
    'description' => '',
    'index' => ''
])
<div class="relative border border-orange-500/40 rounded-xl p-8 bg-white/10 dark:bg-gray-900/30 backdrop-blur-xl shadow-lg hover:scale-[1.03] hover:shadow-orange-500/30 transition-transform duration-300 group animate-fade-in">
    <span class="absolute -top-6 left-6 flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-tr from-orange-500 via-pink-500 to-yellow-400 text-white text-2xl font-bold shadow-lg animate-stepper"></span>
    <span class="absolute -top-6 left-6 flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-tr from-orange-500 via-pink-500 to-yellow-400 text-white text-2xl font-bold shadow-lg animate-stepper">{{ $index }}</span>
    <h3 class="text-xl font-semibold mb-2 mt-4">{{ str($title) }}</h3>
    <p class="text-gray-300 leading-relaxed">
        {{ str($description)->wordWrap(8)  }}
    </p>
</div>

