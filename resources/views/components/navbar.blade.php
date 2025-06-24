{{-- resources/views/components/navbar.blade.php --}}
@props([
    'menu' => [], // expects ['main-menu' => ...]
    'mobileVar' => 'mobileOpen',
    'languageSwitcher' => null,
])

<nav
    x-data="{ {{ $mobileVar }}: false }"
    class="xs:relative bg-neutral backdrop-blur-xl border-b border-base sticky top-0 z-50 shadow-sm transition-all duration-300 overflow-visible animate-fade-in-navbar"
>
    <div class="container mx-auto px-4 py-3 lg:px-8 relative z-10">
        <div class="flex items-center justify-between ">
            <div class="flex items-center justify-between w-full lg:w-auto space-x-4 lg:space-x-6">
                {{-- Logo and Brand Name --}}
                <div class="flex items-center gap-3">
                    <x-logo :minimal="true" class="w-8 h-8" />
                    <a href="{{ route('landing') }}" class="text-2xl font-bold text-primary-content">{{ config('app.name') }}</a>
                </div>
            </div>
            <ul class="hidden lg:flex lg:items-center lg:space-x-6">
                @foreach ($menu->items as $menuItem)
                    @if ($menuItem->children && $menuItem->children->isNotEmpty())
                        <li class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                            <a href="{{ $menuItem->model?->url() ?? $menuItem->custom_url  }}" class="flex items-center  px-3 py-2 rounded-lg font-medium transition-colors duration-200" @click="open = !open">
                                {{ $menuItem->label }}
                                <svg class="ml-1 h-4 w-4 text-muted group-hover:text-secondary transition-colors duration-200" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.584l3.71-3.396a.75.75 0 011.04 1.084l-4.25 3.89a.75.75 0 01-1.04 0l-4.25-3.89a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <ul class="absolute left-0 mt-1 w-48 bg-base-200 dark:bg-surface border border-base rounded-lg shadow-lg transition-all duration-200 z-50"
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
                                        <a href="{{ $subMenuItem->custom_url  }}" target="{{ $subMenuItem->target->getHtmlProperty() }}" class="block px-4 py-2 text-primary-content hover:textneutral hover:bg-accent-bg dark:hover:bg-gray-800 rounded-md transition-colors duration-200">
                                            {{ $subMenuItem->label }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="{{ $menuItem->model?->url() ?? $menuItem->custom_url }}" target="{{ $menuItem->target->getHtmlProperty() }}" class="text-neutral-content hover:text-primary px-3 py-2 rounded-lg font-medium transition-colors duration-200">
                                {{ $menuItem->label }}
                            </a>
                        </li>
                    @endif
                @endforeach

            </ul>
            <x-layout.shared.theme-toggle class="hidden lg:flex"/>

            <div class="flex lg:hidden gap-3">
                <x-layout.shared.theme-toggle />
                <button
                    @click="{{ $mobileVar }} = !{{ $mobileVar }}"
                    class="p-2 rounded-lg  focus:outline-none focus:ring-2 focus:ring-secondary relative group hover:text-secondary "
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

        </div>
    </div>

    {{-- === Mobile Menu (toggleable) === --}}
    <div class="lg:hidden ">
        <div
            x-show="{{ $mobileVar }}"
            class="border-t border-base bg-base-200 dark:bg-surface/95 shadow-md"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            x-cloak
        >
            <ul class="px-4 py-4 space-y-2">
                @foreach($menu->items as $menuItem)
                    <a href="{{ $menuItem->model?->url() ?? $menuItem->custom_url }}"
                       class="block text-primary-content hover:text-secondary px-4 py-2 rounded-lg transition-colors duration-200">
                        {{  $menuItem->label  }}
                    </a>
                @endforeach
            </ul>

        </div>
    </div>



</nav>
