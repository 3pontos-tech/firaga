<section class="text-base-content px-10 py-30 overflow-hidden bg-[#272727] ">
    <div class="container bg-[#303030] rounded-3xl p-6 sm:p-10  mx-auto flex flex-col lg:flex-row lg:items-center lg:justify-between">
            <div class="flex items-center justify-between gap-x-48 px-32 py-28">
                <div class="shrink-0 mb-8 lg:mb-0">
                    <span class="relative inline-block">
                        <img src="{{ asset('images/blog_element.svg') }}" alt="Blog Icon"
                            class="w-20 h-20 text-primary relative z-10" />
                    </span>
                </div>
                <div class="flex-1 text-center lg:text-left mb-6 lg:mb-0 px-2 sm:px-0">
                    <h3 class="text-2xl sm:text-5xl text-text-light font-extrabold mb-4">
                        Acesse nosso blog para ter acesso as melhores métricas
                    </h3>
                    <p class="text-text-medium text-xl leading-[150%]">
                        Nosso blog é o lugar ideal para quem busca conhecimento e insights para tomar decisões
                        financeiras
                        mais inteligentes.
                    </p>
                </div>
                <div class="">
                    <x-layout.shared.button class="p-4" href="{{ route('blog.index') }}" variant="primary">Acessar
                        blog</x-layout.shared.button>
                </div>
            </div>
        </div>
</section>
