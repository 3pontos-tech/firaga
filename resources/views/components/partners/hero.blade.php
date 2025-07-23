@props([
    'heroData' => [],
])

<section class="min-h-[125vh] flex flex-col items-center justify-center">
    <div class="container">
        <div class="flex flex-col items-center justify-center gap-y-6">
            <x-layout.shared.chip variant="primary" class="px-4 py-2">
                Serviços
            </x-layout.shared.chip>
            <h1 class="font-bold text-text-high text-[80px]">Parcerias</h1>
            <p class="text-text-medium">Transforme sua vida financeira com clareza, estratégia e propósito.</p>
            <x-layout.shared.button variant="primary" class="p-4">Agende uma consulta</x-layout.shared.button>
        </div>
        <div>
            <img src="{{ asset('images/stock/partners-hero.png') }}" alt="Parcerias" class="w-full h-full object-cover">
        </div>
    </div>
</section>
