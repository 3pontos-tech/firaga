@props([
    'section' => 'Nossas Especialidades',
    'heading' => 'Soluções Personalizadas',
    'description' => 'Oferecemos serviços financeiros especializados para atender às suas necessidades específicas e acelerar sua jornada rumo à independência financeira.',
    'solutions' => collect(),
])

<section class="bg-base-200/80 ">
    <div class="max-w-7xl py-24 mx-auto ">
        <div class="mb-16 px-4 md:px-8" style="opacity: 1; transform: none; will-change: opacity, transform;">
            <div class="flex items-center gap-4 mb-6 bg-primary p-3 rounded-md w-fit">
                <span class="text-sm font-semibold uppercase tracking-wider text-white">{{ $section }}</span>
            </div>
            <h2 class="text-3xl font-bold text-base-content mb-4 md:text-4xl lg:text-5xl">
                {{ $heading }}
            </h2>
            <p class="max-w-2xl text-lg text-zinc-400 md:text-xl">
                {{ $description }}
            </p>
        </div>
        <div class="relative mx-5 overflow-hidden rounded-2xl bg-linear-to-br from-base-100 to-base-200">

            <div class="relative">
                @foreach($solutions as $solution)
                    <x-landing.solution-item
                        :title="$solution['title']"
                        :description="$solution['description']"
                        :icon="$solution['icon']"
                        :link="$solution['redirect_url']"
                    />
                @endforeach

            </div>
            <div
                class="absolute bottom-0 left-0 right-0 h-px bg-linear-to-r from-transparent vianeutral/50 to-transparent"></div>
        </div>
        <div class="mt-12 text-center" style="opacity: 1; will-change: opacity;"><p class="text-zinc-400 mb-4">Não encontrou
                exatamente o que procura?</p>
            <button class="text-primary hover:text-primary font-semibold transition-colors">Fale conosco para uma
                solução personalizada →
            </button>
        </div>
    </div>
</section>


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
