@props([
    'badge',
    'heading',
    'description',
    'cards' => [],
    'cta_label',
    'cta_url',
])

<div class="container mx-auto py-15 md:py-0">
    <div class="flex flex-col lg:flex-row lg:justify-between lg:items-end gap-8 lg:gap-12">
        <div class="w-full lg:w-4/6 flex flex-col">
            <div class="flex flex-col gap-y-6 sm:gap-y-8 md:gap-y-10">
                <x-layout.shared.chip class="px-4 py-2">
                    {{ $badge }}
                </x-layout.shared.chip>
                <h2 class="text-text-high font-bold text-2xl sm:text-3xl md:text-4xl lg:text-5xl leading-tight">
                    {{ $heading }}
                </h2>
                <p class="text-text-medium leading-relaxed text-base sm:text-lg md:text-xl">
                    {{ $description }}
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 mt-8 sm:mt-10 md:mt-12">
                @foreach($cards as $card)
                    <x-cards.grid-card
                        :icon="$card['icon']"
                        :title="$card['title']"
                        :description="$card['description']"
                    />
                @endforeach
            </div>
            <div class="flex flex-col sm:flex-row justify-start gap-4 sm:gap-x-4 mt-8 sm:mt-10 md:mt-12">
                <x-layout.shared.button :href="$cta_url"
                                        class="bg-brand-primary text-white p-3 sm:p-4 w-full sm:w-auto">
                    {{ $cta_label }}
                </x-layout.shared.button>
            </div>
        </div>
        <div class="w-full lg:w-2/4 justify-center lg:justify-end mt-8 lg:mt-0 hidden xl:block">
            <img
                src="{{ $renderable?->getFirstMediaUrl(App\Enums\CustomComponent::TwoColumnsImageFeatureGrid->value) ?? asset('images/stock/our-approach.png') }}"
                alt="Code Capital" class="w-full max-w-[500px] lg:max-w-[652px] object-cover">
        </div>
    </div>
</div>
