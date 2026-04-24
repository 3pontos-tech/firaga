<x-layout.landing theme="metallic" splash-from="var(--elevation-surface)" splash-to="var(--elevation-surface)">
    <section class="section-first">
        <div class="container flex flex-col items-center gap-8" data-reveal-stagger="140">
            <x-fr-headline data-reveal="up">
                <x-slot:header>
                    <div class="flex w-full flex-col items-center justify-center gap-2">
                        <x-logo-badge class="justify-center"> Nossos serviços </x-logo-badge>
                    </div>
                </x-slot:header>

                <x-slot:title>
                    Seu patrimônio merece mais do que organização
                </x-slot:title>
                <x-slot:description>
                    O modelo de atendimento premium da Firece para quem exige personalização, estratégia avançada e
                    confidencialidade em cada decisão.
                </x-slot:description>

                <x-slot:footer>
                    <div class="mt-4 flex w-full items-center justify-between">
                        <div class="flex flex-col items-start gap-2">
                            <x-fr-heading> +10 anos </x-fr-heading>
                            <x-fr-text size="xs"> DE MERCADO </x-fr-text>
                        </div>

                        <div class="bg-border-base w-px self-stretch"></div>

                        <div class="flex flex-col items-start gap-2">
                            <x-fr-heading> 300% </x-fr-heading>
                            <x-fr-text size="xs"> CRES. ANUAL </x-fr-text>
                        </div>

                        <div class="bg-border-base w-px self-stretch"></div>

                        <div class="flex flex-col items-start gap-2">
                            <x-fr-heading> +2 mil </x-fr-heading>
                            <x-fr-text size="xs"> CLIENTES </x-fr-text>
                        </div>
                    </div>
                </x-slot:footer>
            </x-fr-headline>
        </div>
    </section>
</x-layout.landing>
