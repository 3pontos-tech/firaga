@props([
    'title' => '',
    'description' => '',
    'icon' => '',
    'class' => '',
    'titleOnTop' => true,
])
<div class="dark:bg-elevation-01dp hover:bg-brand-primary transition-all duration-300 px-4 sm:px-6 md:px-8 py-4 md:py-5 {{ $class }} group hover:border-brand-primary">
    <div class="flex flex-col gap-y-1 sm:gap-y-2 min-w-0">
        <div class="flex items-center gap-x-3 sm:gap-x-4 md:gap-x-6 min-w-0">
            <x-filament::icon :icon="$icon" class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 lg:w-16 lg:h-16 flex-shrink-0 text-icon-high group-hover:text-icon-light" aria-hidden="true" />
            <h3 class="text-base sm:text-lg md:text-xl lg:text-2xl font-semibold text-text-high leading-tight truncate">{{ $titleOnTop ?  $title : $description }}</h3>
        </div>
        <p class="text-sm sm:text-base md:text-lg lg:text-xl text-text-medium font-medium group-hover:text-text-light leading-relaxed">{{ $titleOnTop ? $description : $title}}</p>
    </div>
</div>
