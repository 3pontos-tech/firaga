@props([
    'icon' => 'heroicon-c-megaphone',
    'title' => 'Expertise na Indústria Tech',
    'description' => 'Compreendemos as nuances da carreira em tecnologia, desde equity compensation até trabalho remoto internacional e as oportunidades únicas do setor.',
    'class' => null,
])

<div
    class="hover:bg-gradient-to-r bg-base-100/50 flex flex-col gap-2 hover:from-primary/10 hover:to-transparent border  border-gray-700/50 rounded-lg p-6 {{ $class }}"
>
    <x-filament::icon :icon="$icon" class="w-8 h-8 text-primary" />
    <h3 class="font-semibold text-base-content mb-1">
        {{ $title }}
    </h3>
    <p class="text-base-content/80 text-sm leading-relaxed">
        {{ $description }}
    </p>
</div>
