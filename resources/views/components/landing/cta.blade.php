<section
    class="relative bg-gradient-to-br from-bg via-bg to-surface text-heading py-20 overflow-hidden">

    <div class="container mx-auto px-6 relative z-10">
        <div
            class="bg-surface backdrop-blur-xl items-center rounded-2xl p-6 sm:p-10 flex flex-col lg:flex-row lg:items-center lg:justify-between lg:space-x-8 shadow-2xl sm:border sm:border-brand-hover animate-fade-in overflow-hidden"
            <!-- Left: Icon -->
            <div class="flex-shrink-0 mb-8 lg:mb-0">
                <span class="relative inline-block">
                    <img src="{{ asset('images/blog_element.svg') }}" alt="Blog Icon" class="w-20 h-20 text-brand relative z-10"/>
                </span>
            </div>
            <!-- Middle: Text Content -->
            <div class="flex-1 text-center lg:text-left mb-6 lg:mb-0 px-2 sm:px-0">
                <h3 class="text-2xl sm:text-3xl font-extrabold mb-4">
                    <span>Acesse nosso</span>
                    <span class="italic text-brand"> blog</span>
                    <span> para ter as melhores </span>
                    <span class="font-bold text-brand">matérias</span>
                </h3>
                <p class="text-body text-lg">
                    Nosso blog é o lugar ideal para quem busca conhecimento e insights para tomar decisões financeiras mais inteligentes.
                </p>
            </div>
            <!-- Right: Button -->
            <div class="flex-shrink-0">
                <a
                    href="{{ route('blog.index') }}"
                    class="relative inline-flex items-center justify-center w-full sm:w-auto bg-brand text-white font-semibold px-6 sm:px-8 py-3 sm:py-4 rounded-full shadow-lg hover:bg-brand-hover transition text-base sm:text-lg overflow-hidden group focus:outline-none focus:ring-2 focus:ring-orange-400"
                    aria-label="Ir para o blog"
                >
                    <span class="relative z-10 group-hover:scale-105 transition-transform">IR PARA O BLOG</span>
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 ml-2 sm:ml-3 relative z-10 group-hover:translate-x-1 transition-transform" fill="none"
                         stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
        </div>
    </div>
</section>
