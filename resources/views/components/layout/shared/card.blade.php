@props([
    'href' => '#',
    'variant' => '',
    'class' => '',
    'icon' => '',
    'title' => '',
    'description' => '',
    'hoverCTA' => false,
])

@php
    $variants = [
        'primary' => [
            'bg' => 'bg-outline-dark p-8 rounded-lg hover:bg-brand-primary',
            'icon' => 'text-brand-primary group-hover:text-white',
            'title' => 'text-text-high',
            'description' => 'text-text-medium font-medium group-hover:text-text-high',
        ],
        'metallic' => [
            'bg' => 'bg-transparent hover:bg-gradient-to-r from-[#D6D6D6] via-[#FFFFFF] to-[#D6D6D6] p-8 border border-outline-dark',
            'icon' => 'text-brand-primary group-hover:text-white',
            'title' => 'text-text-high group-hover:text-text-dark',
            'description' => 'text-text-medium font-medium group-hover:text-text-dark',
        ],
    ];

    $variantClasses = $variants[$variant] ?? $variants['primary'];
@endphp

<div class="transition-all duration-300 ease-in-out group rounded-lg {{ $variantClasses['bg'] }} {{ $class }}">
    <div class="flex flex-col gap-y-4">
        {{ $icon }}
        <h6 class="font-semibold {{ $variantClasses['title'] }}">{{ $title }}</h6>
        <p class="text-text-medium font-medium {{ $variantClasses['description'] }}">{{ $description }}</p>

        @if ($hoverCTA)
            <a href="{{ $href }}" class="text-text-medium leading-relaxed group-hover:text-text-high hidden group-hover:flex items-center gap-2 font-medium p-4 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 opacity-0 group-hover:opacity-100">
                Agende uma consulta gratuita
            </a>
        @endif
    </div>
</div>
