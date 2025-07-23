@props([
    'icon' => 'goal',
    'title' => 'Expertise na Indústria Tech',
    'description' =>
        'Compreendemos as nuances da carreira em tecnologia, desde equity compensation até trabalho remoto internacional e as oportunidades únicas do setor.',
    'class' => null,
])

<div
    class="hover:bg-brand-primary bg-elevation-04dp flex flex-col gap-4 border border-outline-light dark:border-outline-dark rounded-lg p-8 {{ $class }} group transition-all duration-300 ease-in-out transform hover:shadow-xl">
    <x-lucide-goal class="w-8 h-8 text-brand-primary group-hover:text-white transition-colors duration-300" />
    <h3 class="font-semibold text-text-high transition-colors duration-300">
        {{ $title }}
    </h3>
    <p class="text-text-medium leading-relaxed group-hover:text-text-high transition-colors duration-300">
        {{ $description }}
    </p>

    <a href="" class="text-text-medium leading-relaxed group-hover:text-text-high hidden group-hover:flex items-center gap-2 font-medium p-4 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 opacity-0 group-hover:opacity-100">
        Agende uma consulta gratuita
        <x-lucide-chevron-right class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" />
    </a>
</div>
