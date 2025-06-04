{{-- resources/views/components/_navbarItem.blade.php --}}
@php
    // Para cada item, determinamos se há children
    $hasChildren = isset($item['children']) && is_array($item['children']) && count($item['children']) > 0;
    // Gera uma chave Alpine única (pode usar o depth e o label)
    $alpineVar = 'open_' . md5($item['label'] . $depth);
@endphp

<li class="relative group" x-data="{ {{ $alpineVar }}: false }" @mouseenter="{{ $alpineVar }} = true" @mouseleave="{{ $alpineVar }} = false">
    {{-- Se for CTA, renderiza botăo especial --}}
    @if(isset($item['is_cta']) && $item['is_cta'])
        <a href="{{ $item['url'] }}"
           class="ml-4 relative bg-orange-500 dark:bg-orange-600 text-white px-5 py-2 rounded-full font-semibold shadow hover:bg-orange-600 transition group overflow-hidden">
            <span class="absolute inset-0 bg-gradient-to-r from-orange-400 via-pink-500 to-yellow-400 opacity-0 group-hover:opacity-30 transition-all blur-lg animate-glow-pulse"></span>
            <span class="relative z-10 group-hover:scale-105 transition-transform">{{ $item['label'] }}</span>
        </a>
    @else
        {{-- Item “normal” ou dropdown --}}
        <button type="button"
                class="flex items-center text-gray-900 dark:text-gray-200 hover:text-orange-500 dark:hover:text-orange-400 px-3 py-2 rounded-md focus:outline-none font-medium transition"
                @click="{{ $alpineVar }} = !{{ $alpineVar }}"
                :aria-expanded="{{ $alpineVar }} ? 'true' : 'false'"
                @if($hasChildren) aria-haspopup="true" @endif
        >
            {{ $item['label'] }}
            @if($hasChildren)
                <svg class="ml-1 h-4 w-4 text-gray-500 group-hover:text-indigo-600 transition"
                     fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                          d="M5.23 7.21a.75.75 0 011.06-.02L10 10.584l3.71-3.396a.75.75 0 011.04 1.084l-4.25 3.89a.75.75 0 01-1.04 0l-4.25-3.89a.75.75 0 01-.02-1.06z"
                          clip-rule="evenodd"/>
                </svg>
            @endif
        </button>

        @if($hasChildren)
            {{-- Dropdown painel nível 1 (ou mais), só se tiver children --}}
            <ul
                class="absolute left-0 mt-2 w-48 bg-white dark:bg-black border border-gray-200 dark:border-gray-800 rounded-md shadow-lg transition-opacity duration-200"
                x-show="{{ $alpineVar }}"
                x-transition:enter="transition ease-out duration-150"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                @click.away="{{ $alpineVar }} = false"
            >
                @foreach($item['children'] as $child)
                    @include('components.navbar.navbar-item', [
                        'item'      => $child,
                        'depth'     => $depth + 1,
                    ])
                @endforeach
            </ul>
        @endif
    @endif
</li>
