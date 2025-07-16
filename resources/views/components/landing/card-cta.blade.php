@props([
    'title' => '',
    'description' => '',
    'hasCTAButton' => false,
    'class' => '',
    'cta_label' => '',
    'cta_link' => '',
])

<div
    class="border dark:border-outline-low border-outline-light p-8 rounded {{ $class }} {{ $hasCTAButton ? 'bg-brand-primary dark:bg-brand-primary' : 'dark:bg-[#303030]' }}">
    <div class="flex flex-col gap-y-4 items-center">
        <div>
            <x-lucide-goal class="w-20 h-20 text-brand-primary" />
        </div>
        <h3 class="text-2xl font-semibold text-text-high">{{ $title }}</h3>
        <p class="font-medium text-center text-xl {{ $hasCTAButton ? 'text-text-light' : 'text-text-medium' }}">{{ $description }}</p>
        @if ($hasCTAButton)
            <x-layout.shared.button :href="$cta_link" variant="secondary" class="px-8 py-3 text-lg w-full font-bold">
                {{ $cta_label }}
            </x-layout.shared.button>
        @endif
    </div>
</div>
