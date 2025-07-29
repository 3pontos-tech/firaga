@props([
    'heading',
    'subheading',
    'badge',
    'cta_label',
    'cta_url',
])

<section class="min-h-[125vh] flex flex-col items-center justify-center">
    <div class="container">
        <div class="flex flex-col items-center justify-center gap-y-6">
            <x-layout.shared.chip variant="primary" class="px-4 py-2">
                {{ $badge }}
            </x-layout.shared.chip>
            <h1 class="font-bold text-text-high text-[80px]">
                {{ $heading }}
            </h1>
            <p class="text-text-medium">
                {{ $subheading }}
            </p>
            <x-layout.shared.button :href="$cta_url" variant="primary" class="p-4">
                {{ $cta_label }}
            </x-layout.shared.button>
        </div>
        <div>
            <img src="{{ asset('images/stock/partners-hero.png') }}" alt="Parcerias" class="w-full h-full object-cover">
        </div>
    </div>
</section>
