@props([
    'headline'
])

<section class="min-h-[300px] relative overflow-hidden">
    <!-- Background image and gradient overlay -->
    <div class="absolute inset-0 -z-10">
        <div
            style="background-image: url('{{ $renderable?->getFirstMediaUrl(App\Enums\CustomComponent::HeroWithBackgroundImage->value) ?? asset('images/stock/work-with-us-hero.jpg') }}');"
            alt="Trabalhe conosco"
            class="absolute inset-0 bg-cover bg-center bg-no-repeat">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t lg:top-0  from-elevation-surface to-elevation-surface/20 bg-elevation-surface/50"></div>
    </div>

    <!-- Content container -->
    <div class="container  lg:py-32">
        <x-headline :component="$headline" class="mx-auto lg:max-w-4xl">
            <x-slot:actions>
                @foreach($headline->actions as $action)
                    <x-button rounded="sm" :component="$action" />
                @endforeach
            </x-slot:actions>
        </x-headline>
    </div>
</section>
