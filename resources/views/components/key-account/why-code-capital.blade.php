<section class="bg-elevation-02dp py-8 sm:py-12 md:py-16 lg:py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col gap-y-8 sm:gap-y-12 md:gap-y-16 justify-center items-center w-full">
        <x-layout.shared.chip variant="metalic">
            Por que escolher a Code Capital?
        </x-layout.shared.chip>
        <x-layout.shared.section-header heading="Lorem Ipsum dolor sit amet"
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 md:gap-8 w-full">
            @for ($i = 0; $i < 6; $i++)
                <x-layout.shared.card variant="metalic" title="Análise de Perfil"
                    description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu augue erat. Duis velit eros, suscipit at nisi vitae, faucibus hendrerit turpis.">
                    <x-slot name="icon">
                        <x-lucide-goal class="w-8 h-8 text-white group-hover:text-icon-dark" />
                    </x-slot>
                </x-layout.shared.card>
            @endfor
        </div>
        <x-layout.shared.button variant="metalic"
            class="w-full sm:w-auto px-6 py-3 sm:px-8 sm:py-4 font-bold text-sm sm:text-base">
            Agende uma consulta gratuita
        </x-layout.shared.button>
    </div>
</section>
