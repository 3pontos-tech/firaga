@props([
    'title' => '',
    'description' => '',
    'icon' => '',
    'class' => '',
    'titleOnTop' => true,
])
<div class="dark:bg-[#303030] hover:bg-brand-primary transition-all duration-300 px-4 sm:px-6 md:px-8 py-4 md:py-5 {{ $class }} group hover:border-brand-primary">
    <div class="flex items-center gap-x-4 sm:gap-x-6 md:gap-x-8">
        <div class="w-8 h-8 sm:w-10 sm:h-10 md:w-[44px] md:h-[44px] bg-icon-low rounded-lg flex-shrink-0">
            <x-filament::icon :icon="$icon" class="w-full h-full text-icon-high group-hover:text-icon-light" />
        </div>
        <div class="flex flex-col gap-y-1 sm:gap-y-2 min-w-0 flex-1">
            <p class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-semibold text-text-high leading-tight">{{ $titleOnTop ?  $title : $description }}</p>
            <h3 class="text-sm sm:text-base md:text-lg lg:text-xl text-text-medium font-medium group-hover:text-text-light leading-relaxed">{{ $titleOnTop ? $description : $title}}</h3>
        </div>
    </div>
</div>
