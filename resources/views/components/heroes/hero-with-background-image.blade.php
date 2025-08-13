@props([
    'headline'
])

<section class="relative isolate min-h-[700px] ">
    <!-- Background image and gradient overlay -->
    <div class="absolute inset-0 -z-10 ">
        <img
            src="{{ $renderable?->getFirstMediaUrl(App\Enums\CustomComponent::HeroWithBackgroundImage->value) ?? asset('images/stock/work-with-us-hero.jpg') }}"
            alt="Trabalhe conosco"
            class="h-full w-full object-cover object-center ">
        <div class="absolute inset-0 bg-gradient-to-t from-elevation-surface to-elevation-surface/20 bg-elevation-surface/50"></div>
    </div>

    <!-- Content container -->
    <div class="mx-auto container ">
        <div class="py-16 md:py-24 lg:py-32">
            <!-- Text column: keep text left with readable max-width -->
            <div class="max-w-2xl flex flex-col justify-between lg:max-w-3xl text-left">
                <x-headline :component="$headline" >
                    <x-slot:actions>
                        @foreach($headline->actions as $action)
                            <x-button rounded="sm" :component="$action" />
                        @endforeach
                    </x-slot:actions>
                </x-headline>
            </div>
        </div>
    </div>
</section>
