@php use App\Models\CMS\Menu; @endphp

@props([
    'menu' => [], // expects ['main-menu' => ...]
    'mobileVar' => 'mobileOpen',
    'languageSwitcher' => null,
    'bg' => 'bg-elevation-02dp',
])

@php
    $menus = Menu::all()->keyBy("slug");
    $menu = $menus->get('main-menu') ?? collect(['items' => []]);
@endphp

<nav
    x-data="{ {{ $mobileVar }}: false }"
    class="xs:relative {{ $bg }} backdrop-blur-xl sticky top-0 z-50 shadow-sm transition-all duration-300 overflow-visible animate-fade-in-navbar"
>
    <div class="py-4 relative z-10 container flex items-center justify-between mx-auto">
        <div class="flex items-center w-full lg:w-auto space-x-4 lg:space-x-6">
            {{-- Logo and Brand Name --}}
            <a href="/">
                <div class="flex items-center gap-3">
                    <x-logo :minimal="true" class="w-8 h-8 fill-brand-primary"/>
                    <h2 class="text-2xl font-bold text-text-high">{{ config('app.name') }}</h2>
                </div>
            </a>
        </div>
        <ul class="hidden lg:flex lg:items-center lg:space-x-6">
            @foreach ($menu->items as $menuItem)
                @if ($menuItem->children && $menuItem->children->isNotEmpty())
                    <li class="relative group" x-data="{ open: false }" @mouseenter="open = true"
                        @mouseleave="open = false">
                        <a href="{{ $menuItem->model?->url() ?? $menuItem->custom_url}}"
                           class="flex items-center px-3 py-2 rounded-lg font-medium  transition-colors duration-200 text-text-dark dark:text-text-light hover:text-primary"
                           @click="open = !open">
                            {{ $menuItem->label }}
                            <svg
                                class="ml-1 h-4 w-4 text-text-medium group-hover:text-primary transition-colors duration-200"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M5.23 7.21a.75.75 0 011.06-.02L10 10.584l3.71-3.396a.75.75 0 011.04 1.084l-4.25 3.89a.75.75 0 01-1.04 0l-4.25-3.89a.75.75 0 01-.02-1.06z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </a>
                        <ul class="absolute left-0 mt-1 w-48 bg-elevation-02dp dark:bg-elevation-03dp border-0 rounded-lg shadow-lg transition-all duration-200 z-50"
                            x-show="open"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-1"
                            @click.away="open = false">
                            @foreach ($menuItem->children as $subMenuItem)
                                <li>
                                    <a href="{{ $subMenuItem->custom_url  }}"
                                       target="{{ $subMenuItem->target->getHtmlProperty() }}"
                                       class="block px-4 py-2 text-text-dark dark:text-text-light hover:text-primary hover:bg-accent-bg dark:hover:bg-gray-800 rounded-md transition-colors duration-200">
                                        {{ $subMenuItem->label }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li>
                        <a href="{{ $menuItem->model?->url() ?? $menuItem->custom_url }}"
                           target="{{ $menuItem->target->getHtmlProperty() }}"
                           class="text-text-high/70 hover:text-text-high px-3 py-2 rounded-lg font-medium transition-colors duration-200">
                            {{ $menuItem->label }}
                        </a>
                    </li>
                @endif
            @endforeach

        </ul>
        @if(config('firaga.themes.enabled', false))
        <x-layout.shared.theme-toggle class="hidden lg:flex"/>
        @endif

        <div class="flex lg:hidden gap-3">
            @if(config('firaga.themes.enabled', false))
                <x-layout.shared.theme-toggle/>
            @endif
            <button
                @click="{{ $mobileVar }} = !{{ $mobileVar }}"
                class="p-2 text-text-high/70 hover:text-text-high border border-white/70 hover:border-white rounded-lg focus:outline-none relative group hover:text-primary hover:border-primary"
                aria-label="Toggle menu"
            >
                <span class="sr-only">Open main menu</span>
                <x-filament::icon icon="heroicon-o-bars-3" class="h-6 w-6 transition-transform duration-300"
                                  x-bind:class="{
                            'rotate-90': {{ $mobileVar }}
                        }"
                />
            </button>
        </div>
    </div>

    {{-- === Mobile Menu (toggleable) === --}}
    <div class="lg:hidden">
        <div
            x-show="{{ $mobileVar }}"
            class="bg-elevation-02dp dark:bg-elevation-03dp shadow-md"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            x-cloak
        >
            <ul class="px-4 py-4 space-y-2 bg-elevation-02dp dark:bg-elevation-03dp">
                @foreach($menu->items as $menuItem)
                    <li>
                        <a href="{{ $menuItem->model?->url() ?? $menuItem->custom_url }}"
                           target="{{ $menuItem->target->getHtmlProperty() }}"
                           class="block text-text-high/70 hover:text-text-high px-4 py-2 rounded-lg transition-colors duration-200">
                            {{  $menuItem->label  }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
