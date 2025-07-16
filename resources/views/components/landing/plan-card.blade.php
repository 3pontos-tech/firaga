@props(['plan'])

@php
    $isPopular = $plan['popular'] ?? false;
    $buttonVariant = $isPopular == 2 ? 'secondary' : 'outline';
    $mainTextColor = $isPopular == 2 ? 'text-text-light' : 'text-text-medium';
@endphp

<div>
    <div
        class=" p-4 rounded-t-lg {{ $isPopular == 2 ? 'bg-brand-primary' : 'bg-[#393939] border dark:border-outline-low border-outline-light' }}">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-2xl text-text-light">{{ $plan['display_name'] }}</h2>
            @if ($isPopular == 2 || $isPopular == 1)
                <span
                    class="bg-outline-light  text-brand-primary py-2 px-4 rounded-full text-sm font-bold flex items-center gap-x-[10px]">
                    <x-lucide-sun-moon class="w-6 h-6" />
                    {{ $isPopular == 2 ? 'Melhor Plano' : 'Popular' }}
                </span>
            @endif
        </div>
    </div>
    <div
        class="p-4 border dark:border-outline-low dark:bg-[#343434] border-outline-light border-t-0 rounded-b-lg space-y-8 {{ $isPopular == 2 ? 'border-none dark:bg-brand-primary' : '' }}">
        <div class="flex flex-col gap-y-3">
            <div class="flex items-baseline gap-x-2">
                <p class="font-semibold text-[32px] text-text-light">{{ $plan['price'] }}</p>
                @if (isset($plan['period']))
                    <span class="{{ $mainTextColor }} text-sm">{{ $plan['period'] }}</span>
                @endif
            </div>
            <span class="{{ $mainTextColor }}">{{ $plan['description'] }}</span>
            @if (isset($plan['note']))
                <span class="{{ $mainTextColor }} text-sm italic">{{ $plan['note'] }}</span>
            @endif
        </div>
        @if (isset($plan['note']))
            <div class="h-[1px] bg-outline-light dark:bg-outline-low "></div>
        @endif

        <div class="flex flex-col gap-y-6">
            <h3 class="font-semibold text-text-high text-[24px]">{{ $plan['target_audience'] ?? 'Para o uso pessoal' }}
            </h3>
            <ul class="flex flex-col gap-y-8">
                @foreach ($plan['items'] as $item)
                    <li class="flex items-start gap-x-2">
                        <x-lucide-check class="w-4 h-4 text-brand-primary" />
                        <span class="{{ $mainTextColor }} font-medium">{{ $item }}</span>
                    </li>
                @endforeach
            </ul>
        </div>

        <div>
            <x-layout.shared.button :href="$plan['button']['url']" :variant="$buttonVariant"
                class="w-full font-semibold py-4 {{ $isPopular == 2 ? 'text-brand-primary' : 'text-text-light border border-outline-low' }}">
                {{ $plan['button']['text'] }}
            </x-layout.shared.button>
        </div>
    </div>
</div>
