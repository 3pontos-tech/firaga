@props([
    'headline',
    'cards'
])

<section id="nosso-atendimento"
         class="container mx-auto text-text-dark dark:text-text-light overflow-hidden py-8 md:py-16 lg:py-20">
    <div class="mx-auto lg:flex lg:items-center lg:justify-between lg:space-x-12 relative z-10">
        <div class="lg:w-1/2 mb-8 md:mb-12 lg:mb-0 space-y-6 md:space-y-8 lg:space-y-10">
            <x-headline :component="$headline"/>
        </div>

        <div class="lg:w-1/2 relative pb-6 sm:p-6 md:pb-10 md:pt-10 md:pr-10 md:pl-10">
            <div class="hidden sm:block sm:absolute bottom-0 left-0 rotate-270">
                <x-partials.corner variant="brand" class="w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] md:w-[120px] md:h-[120px]"/>
            </div>
            <div class="hidden sm:block sm:absolute top-0 right-0 rotate-90">
                <x-partials.corner variant="brand" class="w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] md:w-[120px] md:h-[120px]"/>
            </div>

            <div class="space-y-4 md:space-y-6 lg:space-y-10">
                @foreach ($cards as $index => $card)
                    <x-card-v2
                            :card="$card"
                            :interactive="true"
                            text-box="flex flex-col gap-2 md:mx-4 sm:items-start sm:text-left"
                            class="flex flex-col gap-4 m-0! justify-center items-center
                            sm:justify-start text-center h-full sm:flex-row"
                    >
                        <x-slot:icon class="bg-outline-dark rounded-lg group-hover/card:bg-brand-accent h-12 w-12 sm:h-16 sm:w-16 md:min-w-20 md:min-h-20 flex items-center justify-center">
                            <x-filament::icon :icon="$card->icon" class="group-hover/card:text-brand-primary   w-6 h-6 sm:w-8 sm:h-8" />
                        </x-slot:icon>

                        <x-slot:title class="text-center md:text-left lg:text-left">
                            {{ $card->title }}
                        </x-slot:title>
                        <x-slot:description class="text-center md:text-left lg:text-left">
                            {{ $card->description }}
                        </x-slot:description>

                    </x-card-v2>
                @endforeach
            </div>
        </div>
    </div>
</section>
