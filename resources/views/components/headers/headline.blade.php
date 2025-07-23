@props([
    'headline' => '',
    'description' => '',
    'badge' => null,
    'ctaButton' => null,
])

<div
    class="animate-fade-in mx-auto container w-full max-w-full text-center sm:max-w-xl md:max-w-7xl lg:w-2/3 lg:text-left space-y-4 md:space-y-6 lg:space-y-8">
    {{ $badge }}
    <h1
        class="text-text-high mb-2 sm:mb-4 text-center text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-[80px] font-bold drop-shadow-lg lg:text-left leading-tight">
        {{ str($headline) }}
    </h1>
    <p
        class="text-text-high dark:text-text-medium animate-fade-in mb-4 sm:mb-6 max-w-full text-center text-sm sm:text-base md:text-lg lg:text-xl delay-200 lg:text-left font-medium">
        {{ str($description) }}
    </p>
    <div class="flex flex-col sm:flex-row gap-3 sm:gap-x-4 items-center lg:items-start justify-center lg:justify-start">
        {{ $ctaButton }}
    </div>
</div>
