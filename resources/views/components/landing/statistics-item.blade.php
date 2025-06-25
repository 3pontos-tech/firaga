@props([
    'stat' => [
        'icon' => 'heroicons-o-users',
        'value' => '50K+',
        'label' => 'Satisfied Clients',
        'description' => 'Worldwide',

    ],
    'hasIcon' => true,
])
<div
    class="p-4 md:p-8 text-center ">
    @if($hasIcon)
        <div class="flex justify-center mb-2 md:mb-4">
            <div
                class="p-2 md:p-4 bg-gradient-to-br from-primary/50 to-secondary/50 group-hover:from-primary group-hover:to-secondary rounded-xl md:rounded-2xl duration-300 shadow-md md:shadow-lg">
                <x-filament::icon
                    :icon="$stat['icon']"
                    class="h-5 w-5 md:h-8 md:w-8 text-black"
                />
            </div>
        </div>
    @endif
    <div
        class="text-2xl md:text-4xl font-bold text-primary mb-1 md:mb-3">
        {{ $stat['value'] }}
    </div>
    <div class="text-xs md:text-sm text-base-content uppercase tracking-wider font-semibold leading-tight">
        {{ $stat['label'] }}
    </div>
</div>
