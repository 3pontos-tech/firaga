@props (['headerBg' => 'bg-elevation-surface', 'headerTheme' => ''])

@php
    // Propagate simple theme class (dark, metallic, etc.) to the overlay
    $overlayThemeClass = collect(['dark', 'metallic', 'metallic-light', 'light'])->first(
        fn($t) => str_contains($headerTheme, $t),
        '',
    );

    // Detect if the header has a solid branded (non-surface) background
    $isColoredBg = !in_array($headerBg, ['bg-elevation-surface', '']);

    $navLinks = [
        ['route' => 'home', 'label' => 'Home'],
        ['route' => 'nossos-servicos', 'label' => 'Nossos Serviços'],
        ['route' => 'key-account', 'label' => 'Key Account'],
        ['route' => 'parcerias', 'label' => 'Parcerias'],
        ['route' => 'trabalhe-conosco', 'label' => 'Trabalhe Conosco'],
        ['route' => 'blog', 'label' => 'Blog'],
        ['route' => 'code-capital', 'label' => 'Code Capital'],
    ];
@endphp

<div
    x-data="{ open: false }"
    @keydown.escape.window="open = false"
    x-effect="document.body.style.overflow = open ? 'hidden' : ''"
    class="h-full"
>
    <nav class="mx-auto flex h-full items-center justify-between px-4 sm:px-12 lg:px-24">
        <x-logo />

        <button
            type="button"
            @click="open = !open"
            class="text-brand-primary transition-opacity hover:opacity-80"
            :aria-expanded="open"
            aria-label="Menu"
        >
            <svg x-show="
                    !open
                " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg x-show="
                    open
                " x-cloak xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>
    </nav>

    <div
        x-show="open"
        x-cloak
        x-transition:enter="transition duration-200 ease-out"
        x-transition:enter-start="opacity-0 -translate-y-3"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition duration-150 ease-in"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-3"
        @class ([
            $headerBg,
            $overlayThemeClass,
            'fixed inset-x-0 bottom-0 z-40 overflow-y-auto border-t',
            'border-border-base' => !$isColoredBg,
            'border-text-light/20' => $isColoredBg
        ])
        style="top: var(--header-height)"
    >
        <div class="mx-auto flex flex-col px-4 py-8 sm:px-12 lg:px-24">
            @foreach ($navLinks as $link)
                @php $isActive = request()->routeIs($link['route']); @endphp
                <a
                    href="{{ route($link['route']) }}"
                    @click="open = false"
                    @class ([
                        'border-b py-5 font-sans text-sm font-semibold transition-opacity hover:opacity-70',
                        'border-border-base' => !$isColoredBg,
                        'border-text-light/20' => $isColoredBg,
                        'text-brand-primary' => !$isColoredBg && $isActive,
                        'text-text-high' => !$isColoredBg && !$isActive,
                        'text-text-light' => $isColoredBg && $isActive,
                        'text-text-light/70' => $isColoredBg && !$isActive
                    ])
                >
                    {{ $link['label'] }}
                </a>
            @endforeach
        </div>
    </div>
</div>
