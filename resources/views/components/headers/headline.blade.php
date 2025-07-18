@props([
    'headline' => '',
    'description' => '',
    'buttonText' => '',
    'buttonUrl' => '',
    'badge' => null,
])

<div class="animate-fade-in mx-auto w-full max-w-full text-center sm:max-w-xl md:max-w-7xl lg:w-2/3 lg:text-left space-y-4 md:space-y-6 lg:space-y-8">
    @if ($badge)
    <div class="flex justify-center lg:justify-start">
        <x-layout.shared.chip>
            {{ $badge }}
        </x-layout.shared.chip>
    </div>
    @endif

    <h1
        class="text-text-high mb-2 sm:mb-4 text-center text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-[80px] font-bold drop-shadow-lg lg:text-left leading-tight">
        {{ str($headline) }}
    </h1>
    <p
        class="text-text-high dark:text-text-medium animate-fade-in mb-4 sm:mb-6 max-w-full text-center text-sm sm:text-base md:text-lg lg:text-xl delay-200 lg:text-left font-medium">
        {{ str($description) }}
    </p>
    <div class="flex flex-col sm:flex-row gap-3 sm:gap-x-4 items-center lg:items-start justify-center lg:justify-start">
        <x-layout.shared.button :href="$buttonUrl" variant="primary" class="w-full sm:w-auto px-4 py-3 sm:p-4 font-bold text-sm sm:text-base">
            Agende uma consulta
        </x-layout.shared.button>
        <x-layout.shared.button :href="$buttonUrl" variant="outline" class="w-full sm:w-auto px-4 py-3 sm:p-4 text-text-high font-bold text-sm sm:text-base lg:text-lg">
            Button
        </x-layout.shared.button>
    </div>
</div>
