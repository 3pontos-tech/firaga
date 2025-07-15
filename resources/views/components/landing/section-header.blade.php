@props([
    'heading' => '',
    'description' => '',
])

<div class="mb-12 lg:mb-0 flex flex-col gap-y-6 justify-center items-center">
    <h2 class="text-text-dark dark:text-text-light font-bold text-4xl sm:text-5xl  leading-tight mb-6 tracking-tight">
        {{ $heading }}
    </h2>
    <p class="text-text-medium mb-8 max-w-7xl leading-relaxed text-center">
        {{ $description }}
    </p>
</div>
