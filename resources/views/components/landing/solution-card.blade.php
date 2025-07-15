@props([
    'title' => '',
    'description' => '',
])

<div class="p-8 bg-elevation-05dp rounded border dark:border-outline-dark border-outline-light">
    <div class="flex flex-col gap-y-4">
        <x-lucide-goal class="w-8 h-8 text-brand-primary" />
        <h6 class="font-semibold text-text-high">{{ $title }}</h6>
        <p class="text-text-medium font-medium">{{ $description }}</p>
    </div>
</div>
