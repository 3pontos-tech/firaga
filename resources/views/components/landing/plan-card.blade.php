@props([
    'bestPlan',
    'name',
    'description',
    'note',
    'benefits',
    'cta_label',
    'cta_url',
])

@php
    $buttonVariant = $bestPlan ? 'secondary' : 'outlined';
    $mainTextColor = $bestPlan ? 'text-text-light' : 'text-text-medium';
@endphp

<div>
    <div
        class="p-4 sm:p-6 rounded-t-lg {{ $bestPlan ? 'bg-brand-primary' : 'bg-[#393939] border dark:border-outline-low border-outline-light' }}">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-y-3">
            <h2 class="font-semibold text-xl sm:text-2xl text-text-light">{{ str($name)->title() }}</h2>
            <span
                class="bg-outline-light text-brand-primary py-2 px-3 sm:px-4 rounded-full text-xs sm:text-sm font-bold flex items-center gap-x-2 sm:gap-x-[10px] self-start sm:self-auto">

                    <span class="whitespace-nowrap">{{ $bestPlan ? 'Melhor Plano' : 'Popular' }}</span>
                </span>
        </div>
    </div>
    <div
        class="p-4 sm:p-6 border dark:border-outline-low dark:bg-[#343434] border-outline-light border-t-0 rounded-b-lg space-y-6 sm:space-y-8 {{ $bestPlan  ? 'border-none dark:bg-brand-primary' : '' }}">
        <div class="flex flex-col gap-y-3">
            <span class="{{ $mainTextColor }} text-sm sm:text-base">{{ $description }}</span>
            @if (isset($note))
                <span class="{{ $mainTextColor }} text-xs sm:text-sm italic">{{ $note }}</span>
            @endif
        </div>
        <div class="h-[1px] {{ $bestPlan ? 'bg-outline-light' : 'bg-outline-low' }}"></div>
        <div class="flex flex-col gap-y-4 sm:gap-y-6">
            <ul class="flex flex-col gap-y-4 sm:gap-y-6 md:gap-y-8">
                @foreach ($benefits as $item)
                    <li class="flex items-start gap-x-2 sm:gap-x-3">
                        <x-lucide-check class="w-4 h-4 sm:w-5 sm:h-5 {{ $bestPlan ? 'text-white' : 'text-brand-primary' }} flex-shrink-0 mt-0.5"/>
                        <span class="{{ $mainTextColor }} font-medium text-sm sm:text-base">{{ $item['value'] }}</span>
                    </li>
                @endforeach
            </ul>
        </div>

        <div>
            <x-layout.shared.button
                :href="$cta_url"
                :variant="$buttonVariant"
                class="w-full font-semibold py-3 sm:py-4 text-sm sm:text-base {{ $bestPlan  ? 'text-brand-primary' : 'text-text-light border border-outline-low' }}"
            >
                {{ $cta_label }}
            </x-layout.shared.button>
        </div>
    </div>
</div>
