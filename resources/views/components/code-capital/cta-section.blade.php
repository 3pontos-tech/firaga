<section class="mt-60">
    <div class="relative text-center flex flex-col items-center justify-center">
        <img src="{{ asset('images/globe.png') }}" alt="CTA Section" class="w-full h-full object-cover">
        <div class="absolute top-8 left-8">
            <img src="{{ asset('images/border-corner.svg') }}" alt="CTA Section" class="w-[100px] h-[100px]">
        </div>
        <div class="absolute bottom-8 right-8 rotate-180">
            <img src="{{ asset('images/border-corner.svg') }}" alt="CTA Section" class="w-[100px] h-[100px]">
        </div>
        <div class="absolute inset-0 flex flex-col items-center justify-center max-w-6xl mx-auto px-4 gap-y-[49px]">
            <h2 class="text-6xl font-bold text-white">
                Seu talento é internacional, seus investimentos também devem ser.
            </h2>
            <x-layout.shared.button variant="custom" class="px-8 py-3 text-lg text-text-dark bg-gradient-to-r from-[#D6D6D6] via-[#FFFFFF] to-[#D6D6D6]">
                Agende sua análise
            </x-layout.shared.button>
        </div>
    </div>
</section>
