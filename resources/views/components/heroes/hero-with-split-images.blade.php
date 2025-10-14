@props([
    'headline',
    'cta_label',
    'cta_icon',
    'cta_url',
    'image',
])

<div class="container mx-auto px-4 md:px-6 py-15">
    <div class="grid lg:grid-cols-2 lg:flex-row lg:justify-between lg:items-center gap-12 lg:gap-16">
        <div class="grid grid-cols-2 grid-rows-[2fr_1fr] mt-16 lg:mt-0 lg:grid-rows-2 lg:pl-12 rounded-lg gap-4 w-full order-2">
            <img
                src="{{ $renderable?->getFirstMediaUrl(App\Enums\CustomComponent::HeroWithSplitImages->value) ?? asset('images/stock/consultant.png') }}"
                alt="Consultant"
                class="w-full h-full object-cover rounded-lg col-span-2 lg:col-span-1 lg:row-span-1"
            >
            <img
                src="{{ $renderable?->getFirstMediaUrl(App\Enums\CustomComponent::HeroWithSplitImages->value) ?? asset('images/stock/consultant.png') }}"
                alt="Consultant"
                class="w-full h-full object-cover rounded-lg lg:row-span-2"
            >
            <img
                src="{{ $renderable?->getFirstMediaUrl(App\Enums\CustomComponent::HeroWithSplitImages->value) ?? asset('images/stock/consultant.png') }}"
                alt="Consultant"
                class="w-full h-full object-cover rounded-lg lg:row-span-1"
            >
        </div>

        <div class="w-full relative flex flex-col gap-y-6 sm:gap-y-8 md:gap-y-10 order-1">
            <x-headline :component="$headline" />

            <div class="flex flex-col items-center sm:justify-center sm:flex-row lg:justify-start gap-4 sm:gap-x-4">
                <x-button :icon="$cta_icon" icon-position="trailing" :href="$cta_url"
                          class="bg-brand-primary text-brand-accent p-3 sm:p-4 sm:w-auto rounded-md">
                    {{ $cta_label }}
                </x-button>
            </div>
        </div>
    </div>
</div>
