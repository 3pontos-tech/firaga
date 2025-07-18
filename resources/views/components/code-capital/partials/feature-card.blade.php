@props([
    'icon' => 'goal',
    'title' => 'Expertise na Indústria Tech',
    'description' => 'Compreendemos as nuances da carreira em tecnologia, desde equity compensation até trabalho remoto internacional e as oportunidades únicas do setor.',
    'class' => null,
])

<div
    class="hover:bg-gradient-to-r bg-outline-dark flex flex-col gap-4 hover:from-primary/10 hover:to-transparent border  border-gray-700/50 rounded-lg p-8 {{ $class }}"
>
    <x-lucide-goal class="w-8 h-8 text-brand-primary" />
    <h3 class="font-semibold text-text-high ">
        {{ $title }}
    </h3>
    <p class="text-text-medium leading-relaxed">
        {{ $description }}
    </p>
</div>
