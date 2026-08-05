@props (['color' => 'text-elevation-surface'])

{{-- Recorte orgânico que cobre a lateral esquerda de uma mídia dentro de um container posicionado. --}}
<svg
    {{
        $attributes->class([
            'pointer-events-none absolute inset-0 h-full w-full',
            $color,
        ])
    }}
    viewBox="0 0 732 640"
    preserveAspectRatio="none"
    fill="currentColor"
    aria-hidden="true"
>
    <path
        d="M-8,-8 L1.4812,25.1051 L92.5537,237.094 C131.929,328.748 123.172,433.979 69.187,517.864 L8.54887,612.087 L-8,648 Z"
    />
</svg>
