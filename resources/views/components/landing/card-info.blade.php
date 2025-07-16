@props([
    'title' => '',
    'description' => '',
    'icon' => '',
    'class' => '',
])
<div class="dark:bg-[#303030] hover:bg-brand-primary transition-all duration-300 px-8 py-5 {{ $class }} group">
    <div class="flex items-center gap-x-8">
        <div class="w-[44px] h-[44px] bg-icon-low rounded-lg"></div>
        <div class="flex flex-col gap-y-2">
            <h3 class="text-3xl font-semibold text-text-high">{{ $title }}</h3>
            <p class="text-xl text-text-medium font-medium group-hover:text-text-light">{{ $description }}</p>
        </div>
    </div>
</div>
