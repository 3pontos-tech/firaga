@props([
    'title' => '',
    'description' => '',
    'hasCTAButton' => false,
    'class' => '',
    'cta_label' => '',
    'cta_link' => '',
])

<div class="dark:bg-elevation-05dp border dark:border-outline-dark border-outline-light p-8 rounded {{ $class }}">
    <div class="flex flex-col gap-y-3 items-center">
        <div>
            <x-lucide-goal class="w-20 h-20 text-brand-primary" />
        </div>
        <h3 class="text-2xl font-semibold text-text-high">{{ $title }}</h3>
        <p class="text-text-medium font-medium text-center">{{ $description }}</p>
        @if ($hasCTAButton)
            <a href="{{ $cta_link }}"
                class="text-brand-primary font-bold px-8 py-3 rounded-md bg-icon-high w-full flex justify-center ">
                {{ $cta_label }}
            </a>
        @endif
    </div>
</div>
