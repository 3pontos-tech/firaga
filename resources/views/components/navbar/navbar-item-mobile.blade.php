{{-- resources/views/components/_navbarItemMobile.blade.php --}}
@php
    $hasChildren = isset($item['children']) && is_array($item['children']) && count($item['children']) > 0;
    $alpineVarMobile = 'open_mobile_' . md5($item['label'] . $depth);
@endphp

<li>
    @if(isset($item['is_cta']) && $item['is_cta'])
        {{-- Botão CTA no mobile (estilizado full-width) --}}
        <a href="{{ $item['custom_url'] }}"
           class="block bg-brand dark:bg-brand text-white px-5 py-3 rounded-lg font-semibold text-center shadow-sm hover:bg-brand-hover dark:hover:bg-brand-hover transition-colors duration-200 mt-2">
            {{ $item['label'] }}
        </a>
    @else
        @if($hasChildren)
            {{-- Item “pai” com toggle --}}
            <div x-data="{ {{ $alpineVarMobile }}: false }" class="space-y-2">
                <button @click="{{ $alpineVarMobile }} = !{{ $alpineVarMobile }}"
                        class="w-full flex items-center justify-between text-body dark:text-body hover:text-brand hover:bg-accent-bg dark:hover:bg-gray-800 px-4 py-2 rounded-lg focus:outline-none transition-colors duration-200">
                    <span>{{ $item['label'] }}</span>
                    <svg :class="{{ $alpineVarMobile }} ? 'transform rotate-180' : ''"
                         class="h-5 w-5 text-muted group-hover:text-brand transition-all duration-200"
                         fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M5.23 7.21a.75.75 0 011.06-.02L10 10.584l3.71-3.396a.75.75 0 011.04 1.084l-4.25 3.89a.75.75 0 01-1.04 0l-4.25-3.89a.75.75 0 01-.02-1.06z"
                              clip-rule="evenodd"/>
                    </svg>
                </button>
                <ul x-show="{{ $alpineVarMobile }}"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="mt-1 pl-4 space-y-2">
                    @foreach($item['children'] as $child)
                        @include('components.navbar.navbar-item-mobile', [
                            'item'  => $child,
                            'depth' => $depth + 1,
                        ])
                    @endforeach
                </ul>
            </div>
        @else
            {{-- Item “folha” sem filhos --}}
            <a href="{{ $item['custom_url'] }}"
               class="block text-body dark:text-body hover:text-brand hover:bg-accent-bg dark:hover:bg-gray-800 px-4 py-2 rounded-lg transition-colors duration-200">
                {{ $item['label'] }}
            </a>
        @endif
    @endif
</li>
