<div class="container flex justify-between items-center">
    <div class="w-1/2">
        <img src="{{ asset('images/stock/consultant.png') }}" alt="Consultant" class="w-[696px] h-[718px] object-cover">
    </div>
    <div class="w-1/2 relative flex flex-col gap-y-10">
        <div class="absolute top-[-55px] left-[-55px]">
            <img src="{{ asset('images/border-corner-orange.svg') }}" alt="Border Corner" class="">
        </div>
        <h2 class="text-text-high font-bold text-5xl ">
            Consultor financeiro exclusivo
        </h2>
        <p class="text-text-medium text-xl">
            Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia
            personalizada que se adapta às suas necessidades e objetivos
        </p>
        <div class="flex gap-x-4">
            <x-layout.shared.button class="bg-brand-primary text-white p-4">
                Agende uma consulta gratuita
            </x-layout.shared.button>
            <x-layout.shared.button variant="outline" class="text-text-high p-4">
                Saiba mais
            </x-layout.shared.button>
        </div>
    </div>
</div>
