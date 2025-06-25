<section
    class="bg-base-200 text-base-content px-10 py-10 overflow-hidden">

    <div class="container mx-auto">
        <div
            class="bg-base-100 items-center rounded-3xl p-6 sm:p-10 flex flex-col lg:flex-row lg:items-center lg:justify-between lg:space-x-8 shadow-lg ">
            <!-- Left: Icon -->
            <div class="shrink-0 mb-8 lg:mb-0">
                <span class="relative inline-block">
                    <img src="{{ asset('images/blog_element.svg') }}" alt="Blog Icon" class="w-20 h-20 text-primary relative z-10"/>
                </span>
            </div>
            <!-- Middle: Text Content -->
            <div class="flex-1 text-center lg:text-left mb-6 lg:mb-0 px-2 sm:px-0">
                <h3 class="text-2xl sm:text-3xl text-base-content font-extrabold mb-4">
                    <span>Acesse nosso</span>
                    <span class="italic text-primary"> blog</span>
                    <span> para ter as melhores </span>
                    <span class="font-bold text-primary">matérias</span>
                </h3>
                <p class="text-base-content/90 text-lg">
                    Nosso blog é o lugar ideal para quem busca conhecimento e insights para tomar decisões financeiras mais inteligentes.
                </p>
            </div>
            <!-- Right: Button -->
            <div class="">
                <a
                    href="{{ route('blog.index') }}"
                    class="flex items-center gap-3 justify-around w-full sm:w-auto bg-primary text-primary-content font-semibold px-6 sm:px-8 py-3 sm:py-4 rounded-full shadow-lg hover:bg-neutral transition text-base sm:text-lg overflow-hidden group focus:outline-none focus:ring-2 focus:ring-orange-400 "
                    aria-label="Ir para o blog"
                >
                    <span class=" group-hover:scale-105 transition-transform">IR PARA O BLOG</span>
                    <x-filament::icon icon="heroicon-o-arrow-right"
                                     class=" h-5 w-5 text-primary-content">

                    </x-filament::icon>
                </a>
        </div>
    </div>
    </div>
</section>
