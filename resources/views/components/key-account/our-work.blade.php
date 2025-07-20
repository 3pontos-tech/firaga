<section class="py-8 sm:py-12 md:py-16 lg:py-20 xl:py-30 ">
    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 items-center justify-between">
            <div class="w-full lg:w-1/2 xl:w-[806px] relative order-2 lg:order-1">
                <div class="aspect-square lg:h-[400px] xl:h-[803px] relative">
                    <img src="{{ asset('images/stock/our-work.png') }}" alt="Our Work" class="w-full h-full object-cover rounded-[20px]">
                    <div class="absolute bottom-4 sm:bottom-6 lg:bottom-8 left-1/2 transform -translate-x-1/2 text-white text-lg sm:text-xl lg:text-2xl xl:text-3xl font-medium w-[90%] sm:w-[80%] lg:w-[634px] flex flex-col sm:flex-row items-start gap-2 sm:gap-x-4 justify-center ">
                        <img src="{{ asset('images/quote-mark.svg') }}" alt="Quote" class="w-6 h-6 sm:w-8 sm:h-8 flex-shrink-0" />
                        <span>Vamos construir o próximo nível da sua jornada financeira com o Key Account da Fire|ce.</span>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-full flex flex-col gap-y-4 order-1 lg:order-2">
                <x-headers.headline headline="Nosso Trabalho"
                    description="O Key Account é o modelo de atendimento premium da Fire|ce, pensado para clientes que exigem um nível mais alto de personalização, estratégia e confidencialidade.
Aqui, o planejamento financeiro vai além da organização: ele se transforma em um instrumento de segurança, expansão e legado.">
                    <x-slot name="badge">
                        <x-layout.shared.chip variant="metalic">
                            Por que escolher a Code Capital?
                        </x-layout.shared.chip>
                    </x-slot>

                    <x-slot name="ctaButton">
                        <x-layout.shared.button href="#" variant="metalic"
                            class="w-full sm:w-auto px-4 py-3 sm:p-4 font-bold text-sm sm:text-base">
                            Agende uma consultoria gratuita
                        </x-layout.shared.button>
                    </x-slot>

                </x-headers.headline>
            </div>
        </div>
    </div>
</section>
