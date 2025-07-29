@props([
    'title' => '',
    'description' => '',
])

<div class="p-8 bg-[#303030] rounded-lg hover:bg-brand-primary transition-all duration-300 ease-in-out group">
    <div class="flex flex-col gap-y-4">
        <x-lucide-goal class="w-8 h-8 text-brand-primary group-hover:text-white" />
        <h6 class="font-semibold text-text-high">{{ $title }}</h6>
        <p class="text-text-medium font-medium group-hover:text-text-high">{{ $description }}</p>
    </div>
</div>
