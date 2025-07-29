@props([
    'title' => '',
    'description' => '',
    'hasCTAButton' => false,
    'class' => '',
    'cta_label' => '',
    'cta_url' => '',
])

<div
    class="group border dark:border-outline-low border-outline-light p-4 sm:p-6 md:p-8 rounded dark:bg-elevation-03dp hover:bg-brand-primary dark:hover:bg-brand-primary transition-colors duration-300 {{ $class }}">
    <div class="flex flex-col gap-y-3 sm:gap-y-4 items-center">
        <div>
            <x-lucide-goal
                class="w-12 h-12 sm:w-16 sm:h-16 md:w-20 md:h-20 text-brand-primary group-hover:text-text-light transition-colors duration-300"/>
        </div>
        <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-text-high group-hover:text-text-light transition-colors duration-300">
            {{ $title }}
        </h3>
        <p class="font-medium text-center text-sm sm:text-base md:text-lg lg:text-xl text-text-medium group-hover:text-text-light transition-colors duration-300">
            {{ $description }}
        </p>

        <x-layout.shared.button
            :href="$cta_url"
            variant="secondary"
            class="px-6 sm:px-8 py-2 sm:py-3 text-base sm:text-lg w-full font-bold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            {{ $cta_label }}
        </x-layout.shared.button>
    </div>
</div>

