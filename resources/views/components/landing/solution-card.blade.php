@props([
    'title' => '',
    'description' => '',
    'cta_label' => 'Saiba Mais',
    'cta_url' => 'https://pudim.com/',
])


<div
    class="flex relative transform transition-all duration-300 hover:scale-105 hover:-translate-y-2">
    <div
        class="group bg-elevation-03dp hover:bg-brand-primary max-h-[250px] hover:max-h-[400px] rounded-lg transition-all duration-500 ease-in-out overflow-hidden sm:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col justify-end p-4 sm:p-6 md:p-8 shadow-lg hover:shadow-2xl">
        <div class="flex flex-col gap-y-3 sm:gap-y-4 transform transition-all duration-300">
            <x-lucide-goal
                class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-brand-primary group-hover:text-text-light transition-all duration-300 transform group-hover:scale-110 group-hover:rotate-12"/>
            <h6
                class="font-semibold text-lg sm:text-xl md:text-2xl text-text-high group-hover:text-text-light transition-all duration-300 transform group-hover:translate-x-1">
                {{ $title }}
            </h6>

            <p
                class="font-medium text-base sm:text-lg md:text-xl text-text-medium group-hover:text-text-light leading-[150%] transition-all duration-300 line-clamp-2 group-hover:line-clamp-none transform group-hover:translate-y-1">
                {{ $description }}
            </p>
            <div class="opacity-0 max-h-0 group-hover:opacity-100 group-hover:max-h-20 transition-all duration-500 ease-in-out transform translate-y-4 group-hover:translate-y-0">
            <x-layout.shared.button
                :href="$cta_url"
                variant="secondary"
                class="px-6 sm:px-8 py-2 sm:py-3 text-base sm:text-lg w-full font-bold transition-all duration-300 transform hover:scale-105">
                {{ $cta_label }}
            </x-layout.shared.button>
            </div>
        </div>
    </div>
</div>
