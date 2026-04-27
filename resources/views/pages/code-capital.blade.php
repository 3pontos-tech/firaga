<x-layout.landing
    splashFrom="var(--color-elevation-surface)"
    splashTo="var(--color-elevation-surface)"
    splashLogoClass="text-brand-primary"
>
    <section class="section-first">
        <div class="container flex flex-col gap-8">
            <x-fr-headline>
                <x-slot:title>
                    Você ganhou <mark>autonomia</mark> no trabalho. Mas ainda não ganhou <mark>nas finanças</mark>
                </x-slot:title>
                <x-slot:description>
                    Consultoria financeira para profissionais de tecnologia a única que entende PJ, renda em dólar e
                    stock options sem você precisar traduzir sua realidade
                </x-slot:description>
                <x-slot:actions>
                    <x-fr-button> Conhecer o code capital </x-fr-button>
                </x-slot:actions>
            </x-fr-headline>

            <div class="bg-elevation-01dp border-border-base text-xxxs rounded-sm border p-4 font-mono leading-7">
                <div class="mb-3 flex gap-1.5">
                    <span class="size-3 rounded-full bg-red-300"></span>
                    <span class="size-3 rounded-full bg-yellow-100"></span>
                    <span class="size-3 rounded-full bg-green-300"></span>
                </div>
                <div>
                    <p><span class="text-text-low">// TODO: entender pra onde o dinheiro foi</span></p>
                    <p>
                        <span class="text-indigo-300">const </span
                        ><span class="text-text-high font-medium">patrimônio</span
                        ><span class="text-text-medium"> = [];</span>
                    </p>
                    <p>
                        <span class="text-indigo-300">let </span
                        ><span class="text-text-high font-medium">propósito</span
                        ><span class="text-text-medium"> = </span><span class="text-orange-300">undefined</span
                        ><span class="text-text-medium">;</span>
                    </p>
                    <p>&nbsp;</p>
                    <p><span class="text-text-low">// ERROR: CNPJ sem estratégia de distribuição</span></p>
                    <p><span class="text-text-low">// ERROR: USD sem alocação → reserva = null</span></p>
                    <p>&nbsp;</p>
                    <p>
                        <span class="text-indigo-300">function </span><span class="text-text-high">fix</span
                        ><span class="text-text-medium">() { </span><span class="text-indigo-300">return </span
                        ><span class="text-brand-primary">Code.Capital</span><span class="text-text-medium">; }</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-layout.landing>
