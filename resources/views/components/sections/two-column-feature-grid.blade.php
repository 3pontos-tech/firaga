@props([
    'headline',
    'cards' => [],
])

<section class="flex bg-elevation-01dp border-t border-b border-outline-light dark:border-outline-dark mx-auto items-center justify-center py-6 sm:py-10 lg:py-14">
    <div class="container py-15 md:py-0">
        <div class="flex flex-col lg:flex-row lg:justify-between lg:items-end gap-8 lg:gap-12">
            <div class="w-full lg:w-4/6 flex flex-col">
                <div class="flex flex-col gap-y-6 sm:gap-y-8 md:gap-y-10">
                    <x-headline :component="$headline" />
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 mt-8 sm:mt-10 md:mt-12">
                    @foreach($cards as $card)
                        <x-card-v2
                            elevation="2"
                            :interactive="true"
                            text-align="items-center text-center sm:items-start sm:text-left"
                            class="flex h-full sm:flex-row lg:flex-col gap-4 items-center md:items-start"
                        >
                            <x-slot:icon class="bg-brand-primary text-brand-accent group-hover/card:bg-brand-accent rounded-lg h-12 w-12 min-w-12 sm:min-w-16 sm:h-16 sm:w-16 flex items-center justify-center">
                                <x-filament::icon :icon="$card['icon']" class="group-hover/card:text-brand-primary w-6 h-6 sm:w-8 sm:h-8" />
                            </x-slot:icon>
                            <x-slot:title class="mb-2">
                                {{ $card['title'] }}
                            </x-slot:title>
                            <x-slot:description>
                                {{ $card['description'] }}
                            </x-slot:description>
                        </x-card-v2>
                    @endforeach
                </div>
            </div>
            <div class="w-full lg:w-2/4 justify-center lg:justify-end mt-8 lg:mt-0 hidden xl:block">
                <img
                    src="{{ $renderable?->getFirstMediaUrl(App\Enums\CustomComponent::TwoColumnsImageFeatureGrid->value) ?? asset('images/stock/our-approach.png') }}"
                    alt="Code Capital" class="w-full max-w-[500px] lg:max-w-[652px] object-cover">
            </div>
        </div>
    </div>
</section>
