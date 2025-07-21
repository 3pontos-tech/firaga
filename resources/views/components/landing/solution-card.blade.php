@props([
    'title' => '',
    'description' => '',
    'cta_label' => 'Saiba Mais',
    'cta_link' => '#',
])


<div
    class="flex relative">
    <div
        class="group bg-elevation-03dp hover:bg-brand-primary max-h-[250px] hover:max-h-[400px] rounded-lg transition-colors duration-300 overflow-hidden sm:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col justify-end  duration-500 ease-in-out   overflow-hidden flex flex-col justify-end p-4 sm:p-6 md:p-8">
        <div class="flex flex-col gap-y-3 sm:gap-y-4">
            <x-lucide-goal
                class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-brand-primary group-hover:text-text-light transition-colors duration-300"/>
            <h6
                class="font-semibold text-lg sm:text-xl md:text-2xl text-text-high group-hover:text-text-light transition-colors duration-300">
                {{ $title }}
            </h6>

            <p
                class="font-medium text-base sm:text-lg md:text-xl text-text-medium group-hover:text-text-light leading-[150%] transition-all duration-300 line-clamp-2 group-hover:line-clamp-none">
                {{ $description }}
            </p>
            <div class="hidden group-hover:block opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <x-layout.shared.button
                :href="$cta_link"
                variant="secondary"
                class="px-6 sm:px-8 py-2 sm:py-3 text-base sm:text-lg w-full font-bold">
                {{ $cta_label }}
            </x-layout.shared.button>
            </div>
        </div>
    </div>
</div>
