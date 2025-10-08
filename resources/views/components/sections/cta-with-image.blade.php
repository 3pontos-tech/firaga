@props([
    'headline',
    'cta_label',
    'cta_icon',
    'cta_url',
    'image',
])

<div class="container mx-auto px-4 md:px-6 py-15 md:py-0">
    <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center gap-8 lg:gap-12">
        <div class="w-full lg:w-1/2  lg:order-1 ">
            <img src="{{ $renderable?->getFirstMediaUrl(App\Enums\CustomComponent::CallToActionWithImage->value) ?? asset('images/stock/consultant.png') }}" alt="Consultant" class="w-full max-w-[696px] h-auto lg:h-[718px] object-cover rounded-lg">
        </div>
        <div class="w-full lg:w-1/2 relative flex flex-col gap-y-6 sm:gap-y-8 md:gap-y-10 order-1 lg:order-2">
            <div class="absolute top-[-30px] left-[-30px] sm:top-[-40px] sm:left-[-40px] md:top-[-55px] md:left-[-55px] hidden md:block">
                <x-partials.corner variant="brand" class="w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] md:w-[100px] md:h-[100px]"/>
            </div>

            <x-headline :component="$headline" />

            <div class="flex flex flex-col items-center sm:flex-row sm:justify-center sm:flex-row gap-4 sm:gap-x-4">
                <x-button :icon="$cta_icon" icon-position="trailing" :href="$cta_url"
                          class="bg-brand-primary text-white p-3 sm:p-4 sm:w-auto rounded-md lg:w-full">
                    {{ $cta_label }}
                </x-button>
            </div>
        </div>
    </div>
</div>
