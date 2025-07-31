@props([
    'heading' => '',
    'description' => '',
])

<div class="mb-8 sm:mb-10 md:mb-12 lg:mb-0 flex flex-col justify-center items-center">
    <h2 class="text-text-dark dark:text-text-light font-bold text-2xl sm:text-3xl md:text-4xl lg:text-5xl leading-tight mb-4 sm:mb-5 md:mb-6 tracking-tight text-center">
        {{ $heading }}
    </h2>
    <p class="text-text-medium mb-6 sm:mb-7 md:mb-8 max-w-sm sm:max-w-md md:max-w-lg lg:max-w-2xl xl:max-w-4xl 2xl:max-w-7xl leading-relaxed text-center text-base sm:text-lg md:text-xl px-4 sm:px-6 md:px-8">
        {{ $description }}
    </p>
</div>
