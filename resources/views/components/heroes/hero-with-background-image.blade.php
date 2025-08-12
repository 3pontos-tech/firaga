@props([
    'badge',
    'heading' => 'Trabalhe conosco',
    'subheading' => 'Transformamos a forma como as pessoas lidam com dinheiro, capacitando-as a conquistar liberdade, segurança e crescimento financeiro sustentável.',
    'cta_label' => 'Clique Aqui',
    'cta_url' => '#'
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
                <div>
                    @isset($badge)
                        <x-badge>
                            <x-slot:icon>
                                <x-filament::icon icon="firece-logo" class="w-5 h-5 mr-2" />
                            </x-slot:icon>
                            {{ $badge }}
                        </x-badge>
                    @endisset

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-text-high mb-4 md:mb-6">
                        {{ $heading }}
                    </h1>

                    <p class="text-text-medium text-base md:text-lg lg:max-w-3xl">
                        {{ $subheading }}
                    </p>

                </div>
                <div class="mt-8">
                    <x-layout.shared.button :href="$cta_url"
                                            class="bg-brand-primary text-white inline-flex items-center justify-center px-5 py-3 sm:px-6 sm:py-3  sm:w-auto">
                        {{ $cta_label }}
                        <x-filament::icon icon="heroicon-o-chevron-right" class="w-5 h-5 ml-2" />
                    </x-layout.shared.button>
                </div>
            </div>
        </div>
    </div>
</section>
