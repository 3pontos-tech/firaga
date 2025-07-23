<section class="text-base-content py-12 sm:py-16 md:py-20 lg:py-24 xl:py-30 overflow-hidden bg-elevation-surface container mx-auto">
    <div class="bg-elevation-02dp rounded-2xl sm:rounded-3xl p-4 sm:p-6 md:p-8 lg:p-10">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-6 sm:gap-8 md:gap-12 lg:gap-16 xl:gap-20 px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16 py-8 sm:py-12 md:py-16 lg:py-20 xl:py-24">
            <div class="shrink-0 mb-6 lg:mb-0 order-1 lg:order-1">
                <span class="relative inline-block">
                    <img src="{{ asset('images/blog_element.svg') }}" alt="Blog Icon"
                        class="w-12 h-12 sm:w-16 sm:h-16 md:w-18 md:h-18 lg:w-20 lg:h-20 text-primary relative z-10" />
                </span>
            </div>
            <div class="flex-1 text-center lg:text-left mb-6 lg:mb-0 px-2 sm:px-0 order-2 lg:order-2">
                <h3 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl text-text-dark dark:text-text-light font-extrabold mb-3 sm:mb-4 leading-tight">
                    Acesse nosso blog para ter acesso as melhores métricas
                </h3>
                <p class="text-text-medium text-sm sm:text-base md:text-lg lg:text-xl leading-[150%] max-w-2xl mx-auto lg:mx-0">
                    Nosso blog é o lugar ideal para quem busca conhecimento e insights para tomar decisões
                    financeiras
                    mais inteligentes.
                </p>
            </div>
            <div class="order-3 lg:order-3 w-full sm:w-auto">
                <x-layout.shared.button class="p-3 sm:p-4 text-sm sm:text-base whitespace-nowrap w-full sm:w-auto" href="{{ route('blog.index') }}" variant="primary">Acessar
                    blog</x-layout.shared.button>
            </div>
        </div>
    </div>
</section>
