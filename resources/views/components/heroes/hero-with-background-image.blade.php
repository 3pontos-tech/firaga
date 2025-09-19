@php use App\Enums\CustomComponent; @endphp
@props(['headline'])

@php
    $mediaUrl = $renderable?->getFirstMediaUrl(CustomComponent::HeroWithBackgroundImage->value);
    $heroSrc = $mediaUrl && filter_var($mediaUrl, FILTER_VALIDATE_URL) ? $mediaUrl : asset('images/stock/work-with-us-hero.jpg');
    $alt = method_exists($headline, 'getTitle') ? $headline->getTitle() : ($headline->title ?? 'Hero background');
@endphp

<section class="relative overflow-hidden min-h-[60svh] sm:min-h-[65svh] md:min-h-[70svh] lg:min-h-[75svh] xl:min-h-[80svh] flex items-center justify-center">
    <!-- Background image and gradient overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ $heroSrc }}" alt="{{ $alt }}" class="absolute inset-0 h-full w-full object-cover object-center md:object-[50%_40%] lg:object-[50%_35%] select-none" loading="eager" decoding="async" />
        <div class="absolute inset-0 bg-gradient-to-t from-elevation-surface/100 via-elevation-surface/50 to-elevation-surface/20 z-10 pointer-events-none"></div>
    </div>

    <!-- Content container -->
    <div class="relative z-20 container py-16 sm:py-20 md:py-24 lg:py-32 text-center">
        <div class="mx-auto max-w-2xl md:max-w-3xl lg:max-w-4xl">
            <x-headline :component="$headline" class="text-center text-white">
                <x-slot:actions>
                    <div class="flex flex-wrap justify-center gap-3 sm:gap-4">
                        @foreach($headline->actions as $action)
                            <x-button rounded="sm" :component="$action" />
                        @endforeach
                    </div>
                </x-slot:actions>
            </x-headline>
        </div>
    </div>
</section>
