{{-- resources/views/components/navbar.blade.php --}}
@props([
    'menu' => [], // expects ['main-menu' => ...]
    'mobileVar' => 'mobileOpen',
    'languageSwitcher' => null,
])

<nav
    x-data="{ {{ $mobileVar }}: false }"
    class="xs:relative bg-surface dark:bg-surface backdrop-blur-xl border-b border-base sticky top-0 z-50 shadow-sm transition-all duration-300 overflow-visible animate-fade-in-navbar"
>
    <div class="container mx-auto px-4 py-3 lg:px-8 relative z-10">
        <div class="flex items-center justify-between ">
            <div class="flex items-center gap-3">
                <x-logo :minimal="true" class="w-8 h-8" />
                <a href="{{ route('landing') }}" class="text-2xl font-bold text-heading">{{ config('app.name') }}</a>
            </div>

            <div class="flex md:hidden">
                <x-layout.shared.theme-toggle />
                <button
                    @click="{{ $mobileVar }} = !{{ $mobileVar }}"
                    class="p-2 rounded-lg hover:bg-accent-bg dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-brand relative group border border-base bg-bg/80 dark:bg-surface"
                    aria-label="Toggle menu"
                >
                    <span class="sr-only">Open main menu</span>
                    <template x-if="!{{ $mobileVar }}">
                        <svg class="h-5 w-5 text-heading" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </template>
                    <template x-if="{{ $mobileVar }}">
                        <svg class="h-5 w-5 text-heading" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </template>
                </button>

            </div>
            <div class="gap-4 hidden lg:flex">
                <ul class="hidden lg:flex lg:items-center lg:space-x-6">
                    @foreach ($menu->items as $menuItem)
                        @if ($menuItem->children && $menuItem->children->isNotEmpty())
                            <li class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                <a href="#" class="flex items-center text-body hover:text-brand dark:hover:text-brand-hover px-3 py-2 rounded-lg font-medium transition-colors duration-200" @click="open = !open">
                                    {{ $menuItem->label }}
                                    <svg class="ml-1 h-4 w-4 text-muted group-hover:text-brand transition-colors duration-200" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.584l3.71-3.396a.75.75 0 011.04 1.084l-4.25 3.89a.75.75 0 01-1.04 0l-4.25-3.89a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <ul class="absolute left-0 mt-1 w-48 bg-bg dark:bg-surface border border-base rounded-lg shadow-lg transition-all duration-200 z-50"
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
                                            <a href="{{ $subMenuItem->custom_url }}" target="{{ $subMenuItem->target->getHtmlProperty() }}" class="block px-4 py-2 text-body hover:text-brand hover:bg-accent-bg dark:hover:bg-gray-800 rounded-md transition-colors duration-200">
                                                {{ $subMenuItem->label }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li>
                                <a href="{{ $menuItem->custom_url }}" target="{{ $menuItem->target->getHtmlProperty() }}" class="text-body hover:text-brand dark:hover:text-brand-hover px-3 py-2 rounded-lg font-medium transition-colors duration-200">
                                    {{ $menuItem->label }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                    @if (isset($languageSwitcher))
                        <li class="relative group" x-data="{ openLang: false }" @mouseenter="openLang = true" @mouseleave="openLang = false">
                            <a href="#" class="flex items-center text-body hover:text-brand dark:hover:text-brand-hover px-3 py-2 rounded-lg font-medium transition-colors duration-200" @click="openLang = !openLang">
                                {{ \Webid\Druid\Facades\Druid::getCurrentLocaleKey() }}
                                <svg class="ml-1 h-4 w-4 text-muted group-hover:text-brand transition-colors duration-200" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.584l3.71-3.396a.75.75 0 011.04 1.084l-4.25 3.89a.75.75 0 01-1.04 0l-4.25-3.89a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <ul class="absolute left-0 mt-1 w-48 bg-bg dark:bg-surface border border-base rounded-lg shadow-lg transition-all duration-200 z-50"
                                x-show="openLang"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 translate-y-1"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 translate-y-1"
                                @click.away="openLang = false">
                                @foreach ($languageSwitcher as $lang)
                                    <li>
                                        <a href="{{ $lang['url'] }}" class="block px-4 py-2 text-body hover:text-brand hover:bg-accent-bg dark:hover:bg-gray-800 rounded-md transition-colors duration-200">
                                            {{ $lang['label'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                </ul>
                <x-layout.shared.theme-toggle class="hidden md:flex"/>
            </div>
        </div>
    </div>

    {{-- === Mobile Menu (toggleable) === --}}
    <div class="lg:hidden ">
        <div
            x-show="{{ $mobileVar }}"
            class="border-t border-base bg-bg dark:bg-surface/95 shadow-md"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            x-cloak
        >
            <ul class="px-4 py-4 space-y-2">
                @foreach($menu->items as $item)
                    @include('components.navbar.navbar-item-mobile', [
                        'item'      => $item,
                        'depth'     => 0,
                    ])
                @endforeach
            </ul>

        </div>
    </div>



</nav>
