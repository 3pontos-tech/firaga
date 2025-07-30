@props([
    'bg'
])

<footer class="{{ $bg }} text-base-content py-8 sm:py-12 md:py-16">
    <div class="mx-auto container px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-8 sm:gap-10 md:gap-12 animate-fade-in items-start">

            <div class="space-y-6 sm:space-y-8 md:space-y-11 col-span-1 md:col-span-2 lg:col-span-2">
                <a href="/" class="flex flex-col gap-y-3 sm:gap-y-4">
                    <div class="flex items-center space-x-2">
                        <x-logo-white class="w-48 sm:w-56 md:w-64 lg:w-[276px]" />
                    </div>
                    <span class="text-text-medium text-base sm:text-lg md:text-xl">
                        Investimentos Inteligentes e Planejamento Financeiro.
                    </span>
                </a>
                <div class="flex flex-col gap-y-2 sm:gap-y-3">
                    <h3 class="text-text-light text-lg sm:text-xl font-semibold">Nosso Endereço</h3>
                    <p class="text-text-medium font-medium text-sm sm:text-base">Dr. Cardoso de Mello, 1666, Cj, 92 Vila Olímpia, São Paulo
                    </p>
                </div>
            </div>

            <div class="col-span-1">
                <h4 class="text-lg sm:text-xl font-semibold text-text-light mb-3 sm:mb-4">Links de Serviços</h4>
                <ul class="space-y-1 sm:space-y-2 text-text-medium text-sm sm:text-base">
                    <li>
                        <a href="/key-account" class="hover:text-secondary transition">
                            Key Account
                        </a>
                    </li>
                    <li>
                        <a href="/code-capital" class="hover:text-secondary transition">
                            Code Capital
                        </a>
                    </li>
                    <li>
                        <a href="/planejamento" class="hover:text-secondary transition">
                            Planejamento
                        </a>
                    </li>
                    <li>
                        <a href="/educa-fire" class="hover:text-secondary transition">
                            Educa Fire
                        </a>
                    </li>
                    <li>
                        <a href="/parcerias" class="hover:text-secondary transition">
                            Parcerias
                        </a>
                    </li>
                </ul>
            </div>

            <div class="flex flex-col gap-y-3 sm:gap-y-4 col-span-1">
                <h4 class="text-lg sm:text-xl font-semibold text-text-light">Contato e endereço</h4>
                <p class="font-medium text-text-medium text-sm sm:text-base">contato@firece.com.br</p>
                <div class="flex items-center gap-2">
                    <img src="{{ asset('images/brasil-flag.png') }}" alt="Phone"
                        class="w-6 sm:w-7 h-4 sm:h-5 object-contain rounded-sm">
                    <p class="text-text-medium text-sm sm:text-base">(11) 98720-1303</p>
                </div>
            </div>

            <div class="flex flex-col gap-y-3 sm:gap-y-4 col-span-1 md:col-span-2 lg:col-span-2">
                <h4 class="text-lg sm:text-xl font-semibold text-text-light">Nossa Newsletter</h4>
                <p class="text-text-medium text-sm sm:text-base">
                    Envie nos o seu email e receba as melhores notícias e textos sobre o que
                    acontece no mercado financeiro
                </p>
                <form class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4">
                    <input type="email" placeholder="Seu email" id="email"
                        class="flex-1 px-3 sm:px-4 py-2 sm:py-3 border border-outline-dark rounded-lg focus:border-primary focus:outline-none text-text-light bg-transparent placeholder:text-text-medium text-sm sm:text-base">
                    <x-layout.shared.button type="submit"
                        class="bg-primary text-primary-content px-4 py-2 sm:py-3 rounded-lg hover:bg-primary hover:text-primary-content focus:border-primary focus:ring-2 focus:ring-primary focus:outline-none text-text-medium text-sm sm:text-base whitespace-nowrap">
                        Inscrever-se
                    </x-layout.shared.button>
                </form>
            </div>

        </div>
    </div>

</footer>
