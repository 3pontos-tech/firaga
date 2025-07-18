@props([
    'title' => '',
    'description' => '',
])

<div class="p-4 sm:p-6 md:p-8 bg-[#303030] rounded-lg min-w-0 lg:min-w-[280px]">
    <div class="flex flex-col gap-y-3 sm:gap-y-4">
        <x-lucide-goal class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-brand-primary" />
        <h6 class="font-semibold text-text-high text-lg sm:text-xl md:text-2xl">{{ $title }}</h6>
        <p class="text-text-medium font-medium text-base sm:text-lg md:text-xl">{{ $description }}</p>
    </div>
</div>
