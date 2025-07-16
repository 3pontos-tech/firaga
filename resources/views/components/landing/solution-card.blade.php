@props([
    'title' => '',
    'description' => '',
])

<div class="p-8 bg-[#303030] rounded-lg">
    <div class="flex flex-col gap-y-4">
        <x-lucide-goal class="w-8 h-8 text-brand-primary" />
        <h6 class="font-semibold text-text-high text-2xl">{{ $title }}</h6>
        <p class="text-text-medium font-medium text-xl">{{ $description }}</p>
    </div>
</div>
