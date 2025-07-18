@props([
    'title' => '',
    'description' => '',
    'hasCTAButton' => false,
    'class' => '',
    'cta_label' => '',
    'cta_link' => '',
])

<div
    class="border dark:border-outline-low border-outline-light p-4 sm:p-6 md:p-8 rounded {{ $class }} {{ $hasCTAButton ? 'bg-brand-primary dark:bg-brand-primary' : 'dark:bg-[#303030]' }}">
    <div class="flex flex-col gap-y-3 sm:gap-y-4 items-center">
        <div>
            <x-lucide-goal class="w-12 h-12 sm:w-16 sm:h-16 md:w-20 md:h-20 {{ $hasCTAButton ? 'text-text-light' : 'text-brand-primary' }}" />
        </div>
        <h3 class="text-lg sm:text-xl md:text-2xl font-semibold {{ $hasCTAButton ? 'text-text-light' : 'text-text-high' }}">{{ $title }}</h3>
        <p class="font-medium text-center text-sm sm:text-base md:text-lg lg:text-xl {{ $hasCTAButton ? 'text-text-light' : 'text-text-medium' }}">{{ $description }}</p>
        @if ($hasCTAButton)
            <x-layout.shared.button :href="$cta_link" variant="secondary" class="px-6 sm:px-8 py-2 sm:py-3 text-base sm:text-lg w-full font-bold">
                {{ $cta_label }}
            </x-layout.shared.button>
        @endif
    </div>
</div>
