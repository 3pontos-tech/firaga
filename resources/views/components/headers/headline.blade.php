@props([
    'headline' => '',
    'description' => '',
    'buttonText' => '',
    'buttonUrl' => '',
    'badge' => null,
])

<div class="animate-fade-in mx-auto w-full max-w-full text-center sm:max-w-xl md:max-w-7xl lg:w-2/3 lg:text-left space-y-8">
    @if ($badge)
    <x-layout.shared.chip>
        {{ $badge }}
    </x-layout.shared.chip>
    @endif

    <h1
        class="text-text-high mb-4 text-center text-2xl font-bold  drop-shadow-lg sm:mb-6 sm:text-3xl md:text-4xl lg:text-left lg:text-[80px] ">
        {{ str($headline) }}
    </h1>
    <p
        class="sm:text-md text-text-high dark:text-text-medium animate-fade-in mb-6 max-w-full text-center text-base delay-200 sm:mb-8 lg:text-left lg:text-xl font-medium">
        {{ str($description) }}
    </p>
    <div class="flex gap-x-4">
        <x-layout.shared.button :href="$buttonUrl" variant="primary" class="p-4 font-bold">
            Agende uma consulta
        </x-layout.shared.button>
        <x-layout.shared.button :href="$buttonUrl" variant="outline" class="p-4 text-text-high font-bold text-lg">
            Button
        </x-layout.shared.button>
    </div>
</div>
