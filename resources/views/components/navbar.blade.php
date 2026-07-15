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
        ['route' => 'home', 'label' => 'Home', 'primary' => 'Home'],
        ['route' => 'nossos-servicos', 'label' => 'Nossos Serviços', 'primary' => 'Serviços'],
        ['route' => 'key-account', 'label' => 'Key Account'],
        ['route' => 'parcerias', 'label' => 'Parcerias'],
        ['route' => 'trabalhe-conosco', 'label' => 'Trabalhe Conosco', 'primary' => 'Carreira'],
        ['route' => 'quem-somos', 'label' => 'Quem somos', 'primary' => 'Quem somos'],
        ['route' => 'blog', 'label' => 'Blog', 'primary' => 'Blog'],
        ['route' => 'code-capital', 'label' => 'Code Capital'],
    ];

    // Primary links surfaced inline on desktop (short labels).
    $primaryLinks = collect($navLinks)->filter(fn(array $link): bool => isset($link['primary']));

    $submenuData = [
        'home' => [
            'tabs' => [
                ['label' => 'Início', 'anchor' => '#hero'],
                ['label' => 'Depoimentos', 'anchor' => '#depoimentos'],
                ['label' => 'Por que Firece', 'anchor' => '#por-que-firece'],
                ['label' => 'Processo', 'anchor' => '#processo'],
                ['label' => 'Planos', 'anchor' => '#planos'],
            ],
            'services' => [
                ['label' => 'Nossos Serviços', 'route' => 'nossos-servicos'],
                ['label' => 'Key Account', 'route' => 'key-account'],
                ['label' => 'Parcerias', 'route' => 'parcerias'],
                ['label' => 'Code Capital', 'route' => 'code-capital'],
            ],
            'careers' => [['label' => 'Trabalhe Conosco', 'route' => 'trabalhe-conosco']],
        ],
        'nossos-servicos' => [
            'tabs' => [
                ['label' => 'Visão Geral', 'anchor' => '#visao-geral'],
                ['label' => 'Serviços', 'anchor' => '#servicos'],
            ],
            'services' => [
                ['label' => 'Nossos Serviços', 'route' => 'nossos-servicos'],
                ['label' => 'Key Account', 'route' => 'key-account'],
                ['label' => 'Parcerias', 'route' => 'parcerias'],
                ['label' => 'Code Capital', 'route' => 'code-capital'],
            ],
            'careers' => [['label' => 'Trabalhe Conosco', 'route' => 'trabalhe-conosco']],
        ],
        'trabalhe-conosco' => [
            'tabs' => [['label' => 'Vagas', 'anchor' => '#vagas'], ['label' => 'Cultura', 'anchor' => '#cultura']],
            'services' => [
                ['label' => 'Nossos Serviços', 'route' => 'nossos-servicos'],
                ['label' => 'Key Account', 'route' => 'key-account'],
                ['label' => 'Parcerias', 'route' => 'parcerias'],
                ['label' => 'Code Capital', 'route' => 'code-capital'],
            ],
            'careers' => [['label' => 'Trabalhe Conosco', 'route' => 'trabalhe-conosco']],
        ],
        'quem-somos' => [
            'tabs' => [['label' => 'Sobre nós', 'anchor' => '#sobre'], ['label' => 'Equipe', 'anchor' => '#equipe']],
            'services' => [
                ['label' => 'Nossos Serviços', 'route' => 'nossos-servicos'],
                ['label' => 'Key Account', 'route' => 'key-account'],
                ['label' => 'Parcerias', 'route' => 'parcerias'],
                ['label' => 'Code Capital', 'route' => 'code-capital'],
            ],
            'careers' => [['label' => 'Trabalhe Conosco', 'route' => 'trabalhe-conosco']],
        ],
        'blog' => [
            'tabs' => [
                ['label' => 'Artigos', 'anchor' => '#artigos'],
                ['label' => 'Categorias', 'anchor' => '#categorias'],
            ],
            'services' => [
                ['label' => 'Nossos Serviços', 'route' => 'nossos-servicos'],
                ['label' => 'Key Account', 'route' => 'key-account'],
                ['label' => 'Parcerias', 'route' => 'parcerias'],
                ['label' => 'Code Capital', 'route' => 'code-capital'],
            ],
            'careers' => [['label' => 'Trabalhe Conosco', 'route' => 'trabalhe-conosco']],
        ],
    ];
@endphp

<div
    x-data="{
        open: false,
        activeSubmenu: null,
        submenuTimeout: null,
        showSubmenu(key) {
            clearTimeout(this.submenuTimeout);
            this.submenuTimeout = setTimeout(() => {
                this.activeSubmenu = key;
            }, 80);
        },
        hideSubmenu() {
            clearTimeout(this.submenuTimeout);
            this.submenuTimeout = setTimeout(() => {
                this.activeSubmenu = null;
            }, 120);
        },
        cancelHide() {
            clearTimeout(this.submenuTimeout);
        },
    }"
    @keydown.escape.window="
        open = false;
        activeSubmenu = null;
    "
    x-effect="document.body.style.overflow = open ? 'hidden' : ''"
    class="h-full"
>
    <nav class="relative mx-auto flex h-full items-center justify-between px-4 sm:px-12 lg:px-24">
        <x-logo-with-text
            size="sm"
            class="[&_.st0]:text-brand-primary [&_.st1]:text-text-high !w-[94px] lg:!w-[212px]"
        />

        <div class="absolute left-1/2 hidden -translate-x-1/2 items-center gap-8 lg:flex">
            @foreach ($primaryLinks as $link)
                @php $isActive = request()->routeIs($link['route']); @endphp
                <a
                    href="{{ route($link['route']) }}"
                    @mouseenter="showSubmenu('{{ $link['route'] }}')"
                    @mouseleave="hideSubmenu()"
                    @class ([
                        'rounded-sm px-4 py-3 font-display font-semibold transition-colors',
                        'bg-brand-primary text-text-light' => $isActive,
                        'text-text-high hover:text-brand-primary' => !$isActive && !$isColoredBg,
                        'text-text-light/80 hover:text-text-light' => !$isActive && $isColoredBg
                    ])
                    @if ($isActive) aria-current="page" @endif
                >
                    {{ $link['primary'] }}
                </a>
            @endforeach
        </div>

        <button
            type="button"
            @click="
                open = !open;
                activeSubmenu = null;
            "
            class="text-brand-primary transition-opacity hover:opacity-80 lg:hidden"
            :aria-expanded="open"
            aria-label="Menu"
        >
            <svg
                x-show="!open"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="size-6"
            >
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg
                x-show="open"
                x-cloak
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="size-6"
            >
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>
    </nav>

    {{-- Desktop Submenu Panels --}}
    @foreach ($submenuData as $key => $data)
        <div
            x-show="activeSubmenu === '{{ $key }}'"
            x-cloak
            x-transition:enter="transition duration-200 ease-out"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition duration-150 ease-in"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @mouseenter="cancelHide()"
            @mouseleave="hideSubmenu()"
            @class ([
                'fixed inset-x-0 z-50 mx-auto hidden max-w-[1336px] overflow-y-auto border lg:block',
                $headerBg,
                $overlayThemeClass,
                'border-border-base' => !$isColoredBg,
                'border-text-light/20' => $isColoredBg
            ])
            style="top: var(--header-height); max-height: 364px"
        >
            <div class="font-display flex items-start gap-8 px-8 py-8">
                {{-- Column 1: Image + Text --}}
                <div class="flex w-72 shrink-0 flex-col gap-3">
                    <img
                        src="{{ asset('images/firece-submenu.png') }}"
                        alt="Firece"
                        class="h-44 w-full rounded-lg object-cover"
                    />
                    <x-fr-heading level="3" class="text-base!"
                        >Venha fazer parte da <span class="text-brand-primary">Firece</span></x-fr-heading
                    >
                    <x-fr-text size="md">
                        Conte com a Firece para organizar suas finanças, planejar seus próximos passos e com mais
                        segurança.
                    </x-fr-text>
                </div>

                {{-- Column 2: Tabs --}}
                <div class="flex flex-1 flex-col gap-1.5">
                    <h4 class="text-text-high mb-2 text-base font-semibold">Navegação</h4>
                    <hr class="border-border-base" />
                    <div class="grid grid-flow-col grid-rows-4 gap-x-6">
                        @foreach ($data['tabs'] as $tab)
                            <div class="flex items-center justify-between gap-2">
                                <a
                                    href="{{ request()->routeIs($key) ? $tab['anchor'] : route($key) . $tab['anchor'] }}"
                                    class="text-text-medium w-fit rounded-sm px-4 py-3 font-sans text-base font-medium transition-colors"
                                    @click="activeSubmenu = null"
                                >
                                    {{ $tab['label'] }}
                                </a>
                                <x-heroicon-c-chevron-right class="text-brand-primary size-4 shrink-0" />
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Column 3: Services + Careers --}}
                <div class="flex gap-8">
                    <div class="flex flex-col gap-1.5">
                        <h4 class="text-text-high mb-2 text-base font-semibold">Serviços</h4>
                        <hr class="border-border-base" />
                        <div>
                            @foreach ($data['services'] as $service)
                                <div class="flex items-center justify-between gap-2">
                                    <a
                                        href="{{ route($service['route']) }}"
                                        class="text-text-medium w-fit rounded-sm px-4 py-3 font-sans text-base font-medium transition-colors"
                                        @click="activeSubmenu = null"
                                    >
                                        {{ $service['label'] }}
                                    </a>
                                    <x-heroicon-c-chevron-right class="text-brand-primary size-4 shrink-0" />
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <h4 class="text-text-high mb-2 text-base font-semibold">Carreiras</h4>
                        <hr class="border-border-base" />
                        <div>
                            @foreach ($data['careers'] as $career)
                                <div class="flex items-center justify-between gap-2">
                                    <a
                                        href="{{ route($career['route']) }}"
                                        class="text-text-medium w-fit rounded-sm px-4 py-3 font-sans text-base font-medium transition-colors"
                                        @click="activeSubmenu = null"
                                    >
                                        {{ $career['label'] }}
                                    </a>
                                    <x-heroicon-c-chevron-right class="text-brand-primary size-4 shrink-0" />
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{-- Mobile Menu Overlay --}}
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
            'fixed inset-x-0 bottom-0 z-40 overflow-y-auto border-t lg:hidden',
            'border-border-base' => !$isColoredBg,
            'border-text-light/20' => $isColoredBg
        ])
        style="top: var(--header-height)"
    >
        {{-- Level 1: Primary links --}}
        <div x-show="!activeSubmenu" class="mx-auto flex flex-col px-4 py-8 sm:px-12 lg:px-24">
            @foreach ($primaryLinks as $link)
                @php $isActive = request()->routeIs($link['route']); @endphp
                <button
                    type="button"
                    @click="activeSubmenu = '{{ $link['route'] }}'"
                    @class ([
                        'flex w-full items-center justify-between border-b py-5 font-display font-semibold transition-opacity',
                        'border-border-base' => !$isColoredBg,
                        'border-text-light/20' => $isColoredBg,
                        'text-brand-primary' => !$isColoredBg && $isActive,
                        'text-text-high' => !$isColoredBg && !$isActive,
                        'text-text-light' => $isColoredBg && $isActive,
                        'text-text-light/70' => $isColoredBg && !$isActive
                    ])
                >
                    {{ $link['primary'] }}
                    <x-heroicon-c-chevron-right class="text-brand-primary size-4 shrink-0" />
                </button>
            @endforeach
        </div>

        {{-- Level 2: Full-screen submenu per primary link --}}
        @foreach ($submenuData as $key => $data)
            <div
                x-show="activeSubmenu === '{{ $key }}'"
                x-cloak
                class="mx-auto flex flex-col px-4 py-8 sm:px-12 lg:px-24"
            >
                <button
                    type="button"
                    @click="activeSubmenu = null"
                    @class ([
                        'mb-4 flex w-fit items-center gap-2 font-display font-semibold',
                        'text-text-high' => !$isColoredBg,
                        'text-text-light' => $isColoredBg
                    ])
                >
                    <x-heroicon-c-arrow-left class="size-4 shrink-0" />
                    Voltar
                </button>

                <div class="flex flex-col gap-6">
                    {{-- Image + Text --}}
                    <div class="flex flex-col gap-3">
                        <img
                            src="{{ asset('images/firece-submenu.png') }}"
                            alt="Firece"
                            class="h-40 w-full rounded-lg object-cover"
                        />
                        <x-fr-heading level="3" class="text-base!"
                            >Venha fazer parte da <span class="text-brand-primary">Firece</span></x-fr-heading
                        >
                        <x-fr-text size="md">
                            Conte com a Firece para organizar suas finanças, planejar seus próximos passos e com mais
                            segurança.
                        </x-fr-text>
                    </div>

                    {{-- Navegação --}}
                    <div class="flex flex-col gap-1.5">
                        <h4 class="text-text-high mb-2 text-base font-semibold">Navegação</h4>
                        <hr class="border-border-base" />
                        <div class="flex flex-col">
                            @foreach ($data['tabs'] as $tab)
                                <a
                                    href="{{ request()->routeIs($key) ? $tab['anchor'] : route($key) . $tab['anchor'] }}"
                                    class="text-text-medium flex items-center justify-between gap-2 rounded-sm px-4 py-3 font-sans text-base font-medium transition-colors"
                                    @click="
                                        open = false;
                                        activeSubmenu = null;
                                    "
                                >
                                    {{ $tab['label'] }}
                                    <x-heroicon-c-chevron-right class="text-brand-primary size-4 shrink-0" />
                                </a>
                            @endforeach
                        </div>
                    </div>

                    {{-- Serviços --}}
                    <div class="flex flex-col gap-1.5">
                        <h4 class="text-text-high mb-2 text-base font-semibold">Serviços</h4>
                        <hr class="border-border-base" />
                        <div class="flex flex-col">
                            @foreach ($data['services'] as $service)
                                <a
                                    href="{{ route($service['route']) }}"
                                    class="text-text-medium flex items-center justify-between gap-2 rounded-sm px-4 py-3 font-sans text-base font-medium transition-colors"
                                    @click="
                                        open = false;
                                        activeSubmenu = null;
                                    "
                                >
                                    {{ $service['label'] }}
                                    <x-heroicon-c-chevron-right class="text-brand-primary size-4 shrink-0" />
                                </a>
                            @endforeach
                        </div>
                    </div>

                    {{-- Carreiras --}}
                    <div class="flex flex-col gap-1.5">
                        <h4 class="text-text-high mb-2 text-base font-semibold">Carreiras</h4>
                        <hr class="border-border-base" />
                        <div class="flex flex-col">
                            @foreach ($data['careers'] as $career)
                                <a
                                    href="{{ route($career['route']) }}"
                                    class="text-text-medium flex items-center justify-between gap-2 rounded-sm px-4 py-3 font-sans text-base font-medium transition-colors"
                                    @click="
                                        open = false;
                                        activeSubmenu = null;
                                    "
                                >
                                    {{ $career['label'] }}
                                    <x-heroicon-c-chevron-right class="text-brand-primary size-4 shrink-0" />
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
