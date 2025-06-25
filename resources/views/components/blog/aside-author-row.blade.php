@props([
    'name' => 'Carlos Silva',
    'role' => 'Especialista em Planejamento Financeiro',
    'avatarUrl' => 'https://github.com/danielhe4rt.png',
    'slug' => 'carlos-silva',
])

<div style="opacity: 1; will-change: opacity, transform; transform: none;">
    <a href="{{ $slug }}"
       class="flex items-center gap-3 p-3 rounded-lg hover:bg-zinc-800 transition-colors group"><img
            alt="Carlos Silva" loading="lazy" width="40" height="40" decoding="async"
            class="rounded-full" style="color: transparent;"
            src="{{ $avatarUrl }}">
        <div class="flex-1 text-base-content min-w-0">
            <p class="font-medium text-base-content text-sm group-hover:text-primary transition-colors">
                {{ $name }}
            </p>
            <p class="text-xs text-primary-content truncate">
                {{ $role }}
            </p>
        </div>
        <x-heroicon-c-arrow-right
            class="h-4 w-4 text-zinc-400 group-hover:text-primary group-hover:translate-x-1 transition-all"></x-heroicon-c-arrow-right>
    </a>
</div>
