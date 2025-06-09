<section class="mx-auto max-w-7xl py-24">
    <div class="mb-16 px-4 md:px-8" style="opacity: 1; transform: none; will-change: opacity, transform;">
        <div class="flex items-center gap-4 mb-6">
            <div class="h-1 w-12 bg-brand"></div>
            <span class="text-sm font-semibold uppercase tracking-wider text-brand">Nossas Especialidades</span>
        </div>
        <h2 class="text-3xl font-bold text-heading mb-4 md:text-4xl lg:text-5xl">Soluções <span
                class="text-brand">Personalizadas</span></h2>
        <p class="max-w-2xl text-lg text-zinc-400 md:text-xl">Oferecemos serviços financeiros especializados para
            atender às suas necessidades específicas e acelerar sua jornada rumo à independência financeira.</p></div>
    <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-surface to-bg shadow-2xl">

        <div class="relative">
            <x-landing.solution-item
                title="Planejamento"
                description="Três pacotes personalizados para organizar, expandir e maximizar suas finanças, garantindo controle e crescimento contínuo."
                icon="fas-bullseye"
                link="/solutions/planejamento"
            />
            <x-landing.solution-item
                title="Key Account"
                description="Atendimento exclusivo para clientes estratégicos, com planejamento sucessório, investimentos internacionais e parcerias de alto impacto."
                icon="fas-crown"
                link="/solutions/key-account"
            />
            <x-landing.solution-item
                title="Code Capital"
                description="Consultoria especializada para profissionais de TI com ganhos em moeda estrangeira, focada em rentabilidade e proteção patrimonial."
                icon="fas-code"
                link="/solutions/code-capital"
            />
            <x-landing.solution-item
                title="Educa Fire"
                description="Vertente educacional para transformar clientes e capacitar consultores com conhecimento aplicado."
                icon="fas-graduation-cap"
                link="/solutions/educa-fire"
            />
            <x-landing.solution-item
                title="Parcerias"
                description="Conexões estratégicas para gerar resultados mais rápidos e eficazes por meio de alianças coorporativas."
                icon="fas-handshake"
                link="/solutions/parcerias"
            />
        </div>
        <div
            class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-brand/50 to-transparent"></div>
    </div>
    <div class="mt-12 text-center" style="opacity: 1; will-change: opacity;"><p class="text-zinc-400 mb-4">Não encontrou
            exatamente o que procura?</p>
        <button class="text-brand hover:text-brand font-semibold transition-colors">Fale conosco para uma
            solução personalizada →
        </button>
    </div>
</section>

<style>
    .arrow-container {
        position: relative;
    }

    .arrow-right {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
    }

    .group:hover .arrow-up-right {
        opacity: 0;
    }

    .group:hover .arrow-right {
        opacity: 1;
    }

    .solution-item .group {
        transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), background-color 0.3s ease;
    }

    .solution-item:hover .group {
        transform: scale(1.01);
        background-color: rgba(39, 39, 42, 0.5);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const solutionItems = document.querySelectorAll('.solution-item');

        solutionItems.forEach(item => {
            const arrowUpRight = item.querySelector('.arrow-up-right');
            const arrowRight = item.querySelector('.arrow-right');

            item.addEventListener('mouseenter', function () {
                arrowUpRight.style.opacity = '0';
                arrowRight.style.opacity = '1';

                // Add scale and rotation effects
                arrowRight.style.transform = 'scale(1.1) rotate(2deg)';

                // Add subtle animation to the icon container
                const iconContainer = item.querySelector('.flex.h-12.w-12');
                if (iconContainer) {
                    iconContainer.style.transform = 'scale(1.1)';
                    iconContainer.style.backgroundColor = 'rgba(245, 158, 11, 0.2)';
                }
            });

            item.addEventListener('mouseleave', function () {
                arrowUpRight.style.opacity = '1';
                arrowRight.style.opacity = '0';

                // Reset transform
                arrowRight.style.transform = 'scale(1) rotate(0)';

                // Reset icon container
                const iconContainer = item.querySelector('.flex.h-12.w-12');
                if (iconContainer) {
                    iconContainer.style.transform = '';
                    iconContainer.style.backgroundColor = '';
                }
            });
        });
    });
</script>
