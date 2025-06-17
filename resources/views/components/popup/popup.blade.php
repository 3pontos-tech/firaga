@props([
    'id' => 'popup-' . uniqid(),
    'title' => null,
    'trigger' => null,
    'width' => 'max-w-md', // Default width
    'closeButton' => true,
])

<div x-data="{ open: false }" {{ $attributes->merge(['class' => 'relative']) }}>
    <!-- Trigger -->
    <div @click="open = true" class="cursor-pointer">
        {{ $trigger ?? 'Abrir Popup' }}
    </div>

    <!-- Popup Overlay -->
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/50"
        @click.self="open = false"
        style="display: none;"
    >
        <!-- Popup Content -->
        <div
            x-show="open"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-95"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-95"
            @click.away="open = false"
            class="relative {{ $width }} p-6 rounded-lg shadow-lg bg-white dark:bg-gray-900 text-gray-800 dark:text-white"
        >
            <!-- Close Button -->
            @if($closeButton)
            <button
                @click="open = false"
                class="absolute top-3 right-3 p-1 rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            @endif

            <!-- Title -->
            @if($title)
            <div class="mb-4 text-lg font-bold text-gray-900 dark:text-white border-b border-gray-200 dark:border-gray-700 pb-2">
                {{ $title }}
            </div>
            @endif

            <!-- Content -->
            <div class="text-gray-700 dark:text-gray-300">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
