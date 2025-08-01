@props([
    'icon',
    'title',
    'description',
    'class',
    'cta_label',
    'cta_url',
])

<div
        class="hover:bg-brand-primary bg-elevation-04dp flex flex-col gap-4 border border-outline-light dark:border-outline-dark rounded-lg p-8 {{ $class }} group transition-all duration-300 ease-in-out transform hover:shadow-xl">
    <x-filament::icon :$icon class="w-8 h-8 text-brand-primary group-hover:text-white transition-colors duration-300"/>
    <p class="text-text-medium leading-relaxed group-hover:text-text-high transition-colors duration-300">
        {{ $description }}
    </p>

    @if(isset($cta_url) && isset($cta_label))
        <a href="{{ $cta_url }}"
           class="text-text-medium leading-relaxed group-hover:text-text-high hidden group-hover:flex items-center gap-2 font-medium p-4 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 opacity-0 group-hover:opacity-100">
            {{ $cta_label }}
            <x-lucide-chevron-right class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"/>
        </a>
    @endif
</div>
