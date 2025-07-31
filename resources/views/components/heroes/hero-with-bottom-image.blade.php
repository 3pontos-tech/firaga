@props([
    'heading',
    'subheading',
    'badge',
    'cta_label',
    'cta_url',
])
<section class="min-h-screen flex flex-col items-center justify-center lg:min-h-[150vh]">
    <div class="container px-4 sm:px-6 md:px-8">
        <div class="flex flex-col items-center justify-center gap-y-4 sm:gap-y-5 md:gap-y-6 text-center">
            <x-layout.shared.chip variant="primary" class="px-3 py-1.5 sm:px-4 sm:py-2">
                {{ $badge }}
            </x-layout.shared.chip>
            <h1 class="font-bold text-text-high text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-[80px] leading-tight max-w-4xl">
                {{ $heading }}
            </h1>
            <p class="text-text-medium text-base sm:text-lg md:text-xl lg:text-2xl max-w-3xl leading-relaxed">
                {{ $subheading }}
            </p>
            <x-layout.shared.button :href="$cta_url" variant="primary" class="p-3 sm:p-4 mt-2 sm:mt-4">
                {{ $cta_label }}
            </x-layout.shared.button>
        </div>
        <div class="hidden md:block mt-8 sm:mt-10 md:mt-12 lg:mt-16">
            <img src="{{ $renderable?->getFirstMediaUrl(App\Enums\CustomComponent::HeroWithBottomImage->value) ?? asset('images/stock/partners-hero.png') }}" alt="Parcerias" class="w-full h-auto object-cover rounded-lg sm:rounded-xl md:rounded-2xl">
        </div>
    </div>
</section>
