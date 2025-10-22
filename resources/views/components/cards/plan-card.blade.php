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
    $buttonVariant = 'outlined';
    $mainTextColor = $bestPlan ? 'text-text-light' : 'text-text-high';
@endphp

<div class="group">
    <div
        class="p-4 sm:p-6 rounded-t-lg {{ $bestPlan ? 'bg-brand-primary/90 group-hover:bg-brand-primary' : 'bg-elevation-03dp border border-outline-light dark:border-outline-dark group-hover:bg-elevation-04dp' }}">
        <div class="flex flex-col sm:flex-row md:flex-col  sm:justify-between gap-y-3">
            <h2 class="font-semibold text-xl sm:text-2xl {{ $mainTextColor }}">{{ str($name)->title() }}</h2>
        </div>
    </div>
    <div
        class="p-4 sm:p-6 border  border-t-0 rounded-b-lg space-y-6 sm:space-y-8  {{ $bestPlan  ? 'border-none bg-brand-primary/90 group-hover:bg-brand-primary' : 'border-outline-light dark:border-outline-dark dark:bg-elevation-02dp group-hover:bg-elevation-04dp' }}">
        <div class="flex flex-col gap-y-3">
            <span class="{{ $bestPlan ? 'text-text-light' : 'text-text-medium'  }} text-sm sm:text-base">{{ $description }}</span>
            @if (isset($note))
                <span class="{{ $mainTextColor }} text-xs sm:text-sm italic">{{ $note }}</span>
            @endif
        </div>
        <div class="flex flex-col gap-y-4 sm:gap-y-6">
            <ul class="grid grid-cols-1 gap-x-6 sm:gap-x-8 gap-y-2 sm:gap-y-4">
                @foreach ($benefits as $item)
                    <li>
                        <div class="flex items-start gap-x-2 sm:gap-x-3">
                        @if($item['is_highlighted'])
                            <x-heroicon-c-star class="w-4 h-4 sm:w-5 sm:h-5 {{ $bestPlan ? $mainTextColor : 'text-yellow-100' }} flex-shrink-0 mt-0.5" />
                        @else
                            <x-heroicon-m-check class="w-4 h-4 sm:w-5 sm:h-5 {{ $bestPlan ? $mainTextColor : 'text-helper-success' }} flex-shrink-0 mt-0.5"/>
                        @endif

                        <span class="{{ $bestPlan ? 'text-text-light' : 'text-text-medium'  }}  font-medium text-sm sm:text-base">{{ $item['value'] }}</span>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <div>
            <x-layout.shared.button
                :href="$cta_url"
                :variant="$buttonVariant"
                class="w-full font-semibold py-3 sm:py-4 text-sm sm:text-base {{ $bestPlan  ? 'text-text-light border border-outline-light!' : 'text-text-high border border-outline-light dark:border-outline-dark' }}"
            >
                {{ $cta_label }}
            </x-layout.shared.button>
        </div>
    </div>
</div>
