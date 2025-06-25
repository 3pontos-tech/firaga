@props([
    'title' => 'Solution Title',
    'description' => 'Brief description of the solution.',
    'icon' => 'fas-crown',
    'hasIcon' => false,
    'link' => '#',
])

<div class="solution-item">
    <a href="{{ $link }}">
        <div
            class="group flex items-center flex-col md:flex-row justify-between  gap-6 border-1 border-base-300 py-8 px-6 transition-all duration-300 hover:bg-neutral md:px-10"
            style="background-color: rgba(0, 0, 0, 0); will-change: transform; transform: none;">
            <div class="flex flex-col md:flex-row  items-center gap-4 w-full md:w-[300px]">

                <div
                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-base-200 border-surface border-neutral text-primary md:h-14 md:w-14 transition-all duration-300 group-hover:scale-110 ">
                    <x-filament::icon :icon="$icon" class="h-6 w-6 md:h-7 md:w-7"/>
                </div>
                <h3 class="text-sm font-bold uppercase tracking-wider text-base-content transition-colors group-hover:text-primary">
                    {{ $title }}
                </h3>
            </div>
            <div class="flex w-full justify-between items-center gap-4 sm:flex-row flex-col">

                <p class="text-xs text-center md:text-left text-base-content/70 text-muted transition-colors group-hover:text-base-content/90 md:text-sm">
                    {{ $description }}
                </p>

                <div class="arrow-container mt-4 transition-all duration-300 group-hover:translate-x-1.5 relative">
                    <div
                        class="arrow-container transition-all hidden md:block duration-300 group-hover:translate-x-1.5">
                        <x-filament::icon
                            icon="heroicon-o-arrow-right"
                            class="h-4 w-4 text-primary transition-transform duration-300 group-hover:translate-x-1.5"></x-filament::icon>
                    </div>
                    <button
                        class="md:hidden flex flex-col sm:inline-block text-sm w-full sm:w-auto border-2 border-neutral text-primary-content/90 uppercase font-semibold py-2 px-4 sm:py-3 sm:px-4 rounded-4 hover:bg-neutral hover:text-heading dark:hover:text-heading transition shadow-lg sm:shadow-xl focus:outline-none focus:ring-2 focus:ring-neutral backdrop-blur-lg bg-primary text-center focus:ring-offset-2 focus:ring-offset-neutral"
                        aria-label="Conheça mais"
                    >
                        <span>Conheça mais</span>
                    </button>

                </div>
            </div>

            <div class="absolute inset-0 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                 style="background: linear-gradient(90deg, transparent, rgba(226,65,10, 0.05), transparent);"></div>
        </div>
    </a>
</div>
