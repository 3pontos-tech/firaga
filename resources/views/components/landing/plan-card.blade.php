@props(['plan'])

@php
    $isPopular = $plan['popular'] ?? false;
    $buttonVariant = $isPopular == 2 ? 'secondary' : 'outlined';
    $mainTextColor = $isPopular == 2 ? 'text-text-light' : 'text-text-medium';
@endphp

<div>
    <div
        class="p-4 sm:p-6 rounded-t-lg {{ $isPopular == 2 ? 'bg-brand-primary' : 'bg-[#393939] border dark:border-outline-low border-outline-light' }}">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-y-3">
            <h2 class="font-semibold text-xl sm:text-2xl text-text-light">{{ $plan['display_name'] }}</h2>
            @if ($isPopular == 2 || $isPopular == 1)
                <span
                    class="bg-outline-light text-brand-primary py-2 px-3 sm:px-4 rounded-full text-xs sm:text-sm font-bold flex items-center gap-x-2 sm:gap-x-[10px] self-start sm:self-auto">
                    <x-lucide-sun-moon class="w-4 h-4 sm:w-6 sm:h-6" />
                    <span class="whitespace-nowrap">{{ $isPopular == 2 ? 'Melhor Plano' : 'Popular' }}</span>
                </span>
            @endif
        </div>
    </div>
    <div
        class="p-4 sm:p-6 border dark:border-outline-low dark:bg-[#343434] border-outline-light border-t-0 rounded-b-lg space-y-6 sm:space-y-8 {{ $isPopular == 2 ? 'border-none dark:bg-brand-primary' : '' }}">
        <div class="flex flex-col gap-y-3">
            <div class="flex items-baseline gap-x-2">
                <p class="font-semibold text-2xl sm:text-[32px] text-text-light">{{ $plan['price'] }}</p>
                @if (isset($plan['period']))
                    <span class="{{ $mainTextColor }} text-xs sm:text-sm">{{ $plan['period'] }}</span>
                @endif
            </div>
            <span class="{{ $mainTextColor }} text-sm sm:text-base">{{ $plan['description'] }}</span>
            @if (isset($plan['note']))
                <span class="{{ $mainTextColor }} text-xs sm:text-sm italic">{{ $plan['note'] }}</span>
            @endif
        </div>
        @if (isset($plan['note']))
            <div class="h-[1px] bg-outline-light dark:bg-outline-low"></div>
        @endif

        <div class="flex flex-col gap-y-4 sm:gap-y-6">
            <h3 class="font-semibold text-text-high text-lg sm:text-xl md:text-[24px]">{{ $plan['target_audience'] ?? 'Para o uso pessoal' }}
            </h3>
            <ul class="flex flex-col gap-y-4 sm:gap-y-6 md:gap-y-8">
                @foreach ($plan['items'] as $item)
                    <li class="flex items-start gap-x-2 sm:gap-x-3">
                        <x-lucide-check class="w-4 h-4 sm:w-5 sm:h-5 text-brand-primary flex-shrink-0 mt-0.5" />
                        <span class="{{ $mainTextColor }} font-medium text-sm sm:text-base">{{ $item }}</span>
                    </li>
                @endforeach
            </ul>
        </div>

        <div>
            <x-layout.shared.button :href="$plan['button']['url']" :variant="$buttonVariant"
                class="w-full font-semibold py-3 sm:py-4 text-sm sm:text-base {{ $isPopular == 2 ? 'text-brand-primary' : 'text-text-light border border-outline-low' }}">
                {{ $plan['button']['text'] }}
            </x-layout.shared.button>
        </div>
    </div>
</div>
