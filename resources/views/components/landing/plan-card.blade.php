@props(['plan'])

@php
    $isPopular = $plan['popular'] ?? false;
    $buttonVariant = $isPopular == 2 ? 'primary' : 'outline';
@endphp

<div >

    <div class=" p-4 rounded-t-lg border dark:border-outline-dark border-outline-light {{ $isPopular == 2 ? 'bg-brand-primary' : 'bg-elevation-03dp' }}">
        <div class="flex items-center justify-between">
            <h2 class="text-text-high font-semibold text-2xl">{{ $plan['display_name'] }}</h2>
        @if($isPopular == 2 || $isPopular == 1)
                <span class="bg-outline-light  text-brand-primary py-2 px-4 rounded-full text-sm font-bold flex items-center gap-x-[10px]">
                    <x-lucide-sun-moon class="w-6 h-6" />
                    {{ $isPopular == 2 ? 'Popular' : 'Melhor Plano' }}
                </span>
        @endif
        </div>
    </div>

    <div class="p-4 border dark:border-outline-dark border-outline-light border-t-0 rounded-b-lg space-y-8 {{ $isPopular ? 'border-brand-primary' : '' }}">
        <div class="flex flex-col gap-y-3">
            <div class="flex items-baseline gap-x-2">
                <p class="text-text-high font-semibold text-[32px]">{{ $plan['price'] }}</p>
                @if(isset($plan['period']))
                    <span class="text-text-medium text-sm">{{ $plan['period'] }}</span>
                @endif
            </div>
            <span class="text-text-medium">{{ $plan['description'] }}</span>
            @if(isset($plan['note']))
                <span class="text-text-medium text-sm italic">{{ $plan['note'] }}</span>
            @endif
        </div>
        @if(isset($plan['note']))
            <div class="h-[1px] bg-outline-light dark:bg-outline-dark"></div>
        @endif

        <div class="flex flex-col gap-y-8">
            <h3 class="text-text-high font-semibold text-[24px]">{{ $plan['target_audience'] ?? 'Funcionalidades incluídas' }}</h3>
            <ul class="flex flex-col gap-y-2">
                @foreach($plan['items'] as $item)
                    <li class="flex items-start gap-x-2">
                        <x-lucide-check class="w-4 h-4 text-green-500 mt-1 flex-shrink-0" />
                        <span class="text-text-high font-medium">{{ $item }}</span>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="">
            <x-layout.shared.button :href="$plan['button']['url']" :variant="$buttonVariant" class="w-full text-text-light font-semibold py-4">
                {{ $plan['button']['text'] }}
            </x-layout.shared.button>
        </div>
    </div>
</div>
