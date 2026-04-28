@props (['question'])

<div
    x-data="{ open: false }"
    class="cursor-pointer rounded-sm border transition-all duration-300 ease-in-out"
    :class="open
        ? 'bg-elevation-02dp border-border-base'
        : 'border-transparent hover:bg-elevation-01dp hover:border-border-base/50'"
    @click="open = !open"
>
    <div class="flex items-center justify-between gap-4 p-4">
        <span
            class="font-sans text-xs leading-relaxed font-semibold transition-colors duration-300"
            x-bind:class="open ? 'text-text-high' : 'text-text-medium'"
        >
            {{ $question }}
        </span>

        <x-heroicon-c-chevron-down
            class="size-5 shrink-0 transition-all duration-300"
            x-bind:class="open ? 'rotate-180 text-icon-high' : 'text-icon-medium'"
        />
    </div>

    <div class="grid transition-all duration-500 ease-in-out" :class="open ? 'grid-rows-[1fr]' : 'grid-rows-[0fr]'">
        <div class="overflow-hidden">
            <div class="px-4 pb-5">{{ $slot }}</div>
        </div>
    </div>
</div>
