{{-- resources/views/components/_navbarItemMobile.blade.php --}}
@php
    $hasChildren = isset($item['children']) && is_array($item['children']) && count($item['children']) > 0;
    $alpineVarMobile = 'open_mobile_' . md5($item['label'] . $depth);
@endphp

<li>
    @if(isset($item['is_cta']) && $item['is_cta'])
        {{-- Botão CTA no mobile (estilizado full-width) --}}
        <a href="{{ $item['custom_url'] }}"
           class="block bg-orange-500 dark:bg-orange-600 text-white px-5 py-2 rounded-full font-semibold text-center shadow hover:bg-orange-600 transition mt-2">
            {{ $item['label'] }}
        </a>
    @else
        @if($hasChildren)
            {{-- Item “pai” com toggle --}}
            <div x-data="{ {{ $alpineVarMobile }}: false }" class="space-y-1">
                <button @click="{{ $alpineVarMobile }} = !{{ $alpineVarMobile }}"
                        class="w-full flex items-center justify-between text-gray-900 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 px-3 py-2 rounded-md focus:outline-none">
                    <span>{{ $item['label'] }}</span>
                    <svg :class="{{ $alpineVarMobile }} ? 'transform rotate-180' : ''"
                         class="h-5 w-5 text-gray-500 transition-transform"
                         fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M5.23 7.21a.75.75 0 011.06-.02L10 10.584l3.71-3.396a.75.75 0 011.04 1.084l-4.25 3.89a.75.75 0 01-1.04 0l-4.25-3.89a.75.75 0 01-.02-1.06z"
                              clip-rule="evenodd"/>
                    </svg>
                </button>
                <ul x-show="{{ $alpineVarMobile }}" class="mt-1 pl-4 space-y-1">
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
               class="block text-gray-900 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 px-3 py-2 rounded-md">
                {{ $item['label'] }}
            </a>
        @endif
    @endif
</li>
