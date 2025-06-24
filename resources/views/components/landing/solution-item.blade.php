@props([
    'title' => 'Solution Title',
    'description' => 'Brief description of the solution.',
    'icon' => 'fas-crown',
    'link' => '#',
])

<div class="solution-item">
    <a href="{{ $link }}">
        <div
            class="group flex items-center flex-col md:flex-row justify-between  gap-6 border-t border-surface py-8 px-6 transition-all duration-300 hover:bg-zinc-900/50 md:px-10"
            style="background-color: rgba(0, 0, 0, 0); will-change: transform; transform: none;">
            <div class="flex flex-col md:flex-row  items-center gap-4 w-full md:w-[300px]">
                <div
                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-base-200 border-surface border-base text-primary md:h-14 md:w-14 transition-all duration-300 group-hover:scale-110 ">
                    <x-filament::icon :icon="$icon" class="h-6 w-6 md:h-7 md:w-7"/>
                </div>
                <h3 class="text-sm font-bold uppercase tracking-wider text-base-content transition-colors group-hover:text-primary ">
                    {{ $title }}
                </h3>
            </div>
            <div class="flex w-full justify-between sm:flex-row flex-col">

                <p class="text-xs text-base-content/50 text-muted transition-colors group-hover:text-primary-content/80 md:text-sm">
                    {{ $description }}
                </p>

                <div class="arrow-container  mt-4 transition-all duration-300 group-hover:translate-x-1.5 relative">
                    <div class="arrow-container transition-all hidden md:block duration-300 group-hover:translate-x-1.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round"
                             class="arrow-up-right h-5 w-5 text-white md:h-6 md:w-6 transition-all duration-300">
                            <path d="M7 7h10v10"></path>
                            <path d="M7 17 17 7"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round"
                             class="arrow-right h-5 w-5 text-primary md:h-6 md:w-6 absolute top-0 left-0 opacity-0 transition-all duration-300">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </div>
                    <button
                        class="md:hidden flex flex-col sm:inline-block text-sm  w-full sm:w-auto border-2 borderneutral textneutral uppercase font-semibold py-2 px-4 sm:py-3 sm:px-4 rounded-4 hover:bg-neutral hover:text-heading dark:hover:text-heading transition shadow-lg sm:shadow-xl focus:outline-none focus:ring-2 focus:ringneutral-hover backdrop-blur-lg bg-base-200 text-center"
                        aria-label="Conheça mais"
                    >
                        <span>Conheça mais</span>
                    </button>

                </div>
            </div>

            <div class="absolute inset-0 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                 style="background: linear-gradient(90deg, transparent, rgba(226,65,10, 0.05), transparent);"></div>
        </div>
    </a></div>
