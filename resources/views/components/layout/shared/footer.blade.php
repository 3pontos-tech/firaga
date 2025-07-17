<footer class="relative bg-base-300 text-base-content py-16 ">
    <div class="mx-auto px-16 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-12 animate-fade-in items-start">

            <div class="space-y-11 col-span-2">
                <a href="/" class="flex flex-col gap-y-4">
                    <div class="flex items-center space-x-2">
                        <x-logo-white class="w-[276px]" />
                    </div>
                    <span class="text-text-medium text-xl">
                        Investimentos Inteligentes e Planejamento Financeiro.
                    </span>
                </a>
                <div class="flex flex-col gap-y-3">
                    <h3 class="text-text-light text-xl font-semibold">Nosso Endereço</h3>
                    <p class="text-text-medium font-medium">Dr. Cardoso de Mello, 1666, Cj, 92 Vila Olímpia, São Paulo
                    </p>
                </div>
            </div>

            <div>
                <h4 class="text-xl font-semibold text-text-light mb-4">Links de Serviços</h4>
                <ul class="space-y-2 text-text-medium">
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

            <div class="flex justify-evenly flex-col gap-y-4">
                <h4 class="text-xl font-semibold text-text-light">Contato e endereço</h4>
                <p class="font-medium text-text-medium">contato@firece.com.br</p>
                <div class="flex items-center gap-2">
                    <img src="{{ asset('images/brasil-flag.png') }}" alt="Phone"
                        class="w-7 h-5 object-contain rounded-sm">
                    <p class="text-text-medium">(11) 98720-1303</p>
                </div>
            </div>

            <div class="flex flex-col gap-y-4 col-span-2">
                <h4 class="text-xl font-semibold text-text-light">Nossa Newsletter</h4>
                <p class="text-text-medium">
                    Envie nos o seu email e receba as melhores notícias e textos sobre o que
                    acontece no mercado financeiro
                </p>
                <form class="flex flex-col sm:flex-row items-center justify-between gap-x-4">
                    <input type="email" placeholder="Seu email" id="email"
                        class="px-4 py-3 border border-outline-dark rounded-lg focus:border-primary focus:outline-none text-text-light bg-transparent placeholder:text-text-medium w-2/3">
                    <x-layout.shared.button type="submit"
                        class="bg-primary text-primary-content px-4 py-3 rounded-lg hover:bg-primary hover:text-primary-content focus:border-primary focus:ring-2 focus:ring-primary focus:outline-none text-text-medium w-1/3">
                        Inscrever-se
                    </x-layout.shared.button>
                </form>
            </div>

        </div>
    </div>

</footer>
