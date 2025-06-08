{{-- resources/views/components/navbar.blade.php --}}
@props([
    'menu' => [], // expects ['main-menu' => ...]
    'mobileVar' => 'mobileOpen',
    'languageSwitcher' => null,
])

<nav
    x-data="{ {{ $mobileVar }}: false }"
    class="relative bg-white/80 dark:bg-black/60 backdrop-blur-xl border-gray-100 dark:border-gray-800 sticky top-0 z-50 shadow-lg transition-shadow overflow-visible animate-fade-in-navbar"
>
    <div class="container mx-auto px-4 py-2 lg:px-8 relative z-10">
        <div class="flex items-center justify-between ">
            <div class="">
                {{ $brand ?? '' }}
            </div>

            <div class="lg:hidden">
                <button
                    @click="{{ $mobileVar }} = !{{ $mobileVar }}"
                    class="p-2 rounded-md hover:bg-orange-100 dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 relative group border border-gray-200 dark:border-gray-700 bg-white/80 dark:bg-gray-900"
                >
                    <span class="sr-only">Open main menu</span>
                    <template x-if="!{{ $mobileVar }}">
                        <svg class="h-6 w-6 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </template>
                    <template x-if="{{ $mobileVar }}">
                        <svg class="h-6 w-6 text-gray-900 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </template>
                </button>
            </div>
            <div class="flex gap-2">
                <ul class="hidden lg:flex lg:items-center lg:space-x-8">
                    @foreach ($menu->items as $menuItem)
                        @if ($menuItem->children && $menuItem->children->isNotEmpty())
                            <li class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                <a href="#" class="flex items-center text-gray-900 dark:text-gray-200 hover:text-orange-500 dark:hover:text-orange-400 px-3 py-2 rounded-md font-medium transition" @click="open = !open">
                                    {{ $menuItem->label }}
                                    <svg class="ml-1 h-4 w-4 text-gray-500 group-hover:text-indigo-600 transition" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.584l3.71-3.396a.75.75 0 011.04 1.084l-4.25 3.89a.75.75 0 01-1.04 0l-4.25-3.89a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <ul class="absolute left-0 mt-2 w-48 bg-white dark:bg-black border border-gray-200 dark:border-gray-800 rounded-md shadow-lg transition-opacity duration-200 z-50"
                                    x-show="open"
                                    x-transition:enter="transition ease-out duration-150"
                                    x-transition:enter-start="opacity-0 scale-95"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-100"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-95"
                                    @click.away="open = false">
                                    @foreach ($menuItem->children as $subMenuItem)
                                        <li>
                                            <a href="{{ $subMenuItem->custom_url }}" target="{{ $subMenuItem->target->getHtmlProperty() }}" class="block px-4 py-2 text-gray-900 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-md">
                                                {{ $subMenuItem->label }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li>
                                <a href="{{ $menuItem->custom_url }}" target="{{ $menuItem->target->getHtmlProperty() }}" class="text-gray-900 dark:text-gray-200 hover:text-orange-500 dark:hover:text-orange-400 px-3 py-2 rounded-md font-medium transition">
                                    {{ $menuItem->label }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                    @if (isset($languageSwitcher))
                        <li class="relative group" x-data="{ openLang: false }" @mouseenter="openLang = true" @mouseleave="openLang = false">
                            <a href="#" class="flex items-center text-gray-900 dark:text-gray-200 hover:text-orange-500 dark:hover:text-orange-400 px-3 py-2 rounded-md font-medium transition" @click="openLang = !openLang">
                                {{ \Webid\Druid\Facades\Druid::getCurrentLocaleKey() }}
                            </a>
                            <ul class="absolute left-0 mt-2 w-48 bg-white dark:bg-black border border-gray-200 dark:border-gray-800 rounded-md shadow-lg transition-opacity duration-200 z-50"
                                x-show="openLang"
                                x-transition:enter="transition ease-out duration-150"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-100"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
                                @click.away="openLang = false">
                                @foreach ($languageSwitcher as $lang)
                                    <li>
                                        <a href="{{ $lang['url'] }}" class="block px-4 py-2 text-gray-900 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-md">
                                            {{ $lang['label'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                </ul>
                <div class="flex items-center gap-4">
                    {{ $controls ?? '' }}
                </div>
            </div>
        </div>
    </div>

    {{-- === Mobile Menu (toggleable) === --}}
    <div
        x-show="{{ $mobileVar }}"
        class="lg:hidden border-t border-gray-100 dark:border-gray-800 bg-white/95 dark:bg-black shadow"
        x-cloak
    >
        <ul class="px-4 py-4 space-y-1">
            @foreach($menu->items as $item)
                @include('components.navbar.navbar-item-mobile', [
                    'item'      => $item,
                    'depth'     => 0,
                ])
            @endforeach
        </ul>
    </div>

    {{-- === Animações customizadas (se ainda não estiver em um CSS separado) === --}}
    <style>
        .animate-glow { animation: glow 2s ease-in-out infinite alternate; }
        @keyframes glow {
            0% { opacity: 0.5; filter: blur(8px); }
            100% { opacity: 1; filter: blur(16px); }
        }
        .animate-glow-pulse { animation: glowPulse 1.5s infinite alternate; }
        @keyframes glowPulse {
            0% { opacity: 0.1; }
            100% { opacity: 0.4; }
        }
        .animate-fade-in-navbar { animation: fadeInNavbar 1.2s cubic-bezier(.4,0,.2,1) both; }
        @keyframes fadeInNavbar {
            from { opacity: 0; transform: translateY(-24px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</nav>
