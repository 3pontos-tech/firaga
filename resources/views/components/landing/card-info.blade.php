@props([
    'title' => '',
    'description' => '',
    'icon' => '',
    'class' => '',
])

<div class="dark:bg-elevation-05dp border dark:border-outline-dark border-outline-light  px-8 py-5 {{ $class }}">
    <div class="flex items-center gap-x-8">
        <div class="w-[44px] h-[44px] bg-icon-low rounded-lg"></div>
        <div class="flex flex-col gap-y-2">
            <h3 class="text-3xl font-semibold text-text-high">{{ $title }}</h3>
            <p class="text-md text-text-medium font-medium ">{{ $description }}</p>
        </div>
    </div>
</div>
