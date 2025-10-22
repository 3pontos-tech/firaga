@props([
    'bg' => 'bg-elevation-02dp'
])

<footer class="bg-elevation-02dp border-t border-outline-light dark:border-outline-dark metallic:border-outline-dark text-base-content py-8 sm:py-12 lg:py-16">
    <div class="mx-auto container px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-6 gap-8 sm:gap-10 lg:gap-12 animate-fade-in items-start">

            <div class="space-y-6 sm:space-y-8 lg:space-y-11 col-span-1 lg:col-span-2 xl:col-span-2">
                <a href="/" class="flex flex-col">
                    <div class="flex items-center space-x-2">
                        <div class="flex items-center gap-3">
                            <x-logo :minimal="true" class="w-18 h-18 fill-brand-primary" />
                            <h2 class="text-4xl font-bold text-text-high">{{ config('app.name') }}</h2>
                        </div>
                    </div>
                    <span class="text-text-medium text-base sm:text-lg lg:text-xl">
                        Investimentos Inteligentes e Planejamento Financeiro.
                    </span>
                </a>
                <div class="flex flex-col gap-y-2 sm:gap-y-3">
                    <h3 class="text-text-high text-lg sm:text-xl font-semibold">Nosso Endereço</h3>
                    <p class="text-text-medium font-medium text-sm sm:text-base">Dr. Cardoso de Mello, 1666, Cj, 92 Vila Olímpia, São Paulo
                    </p>
                </div>
            </div>

            <div class="col-span-1">
                <h4 class="text-lg sm:text-xl font-semibold text-text-high mb-3 sm:mb-4">Links de Serviços</h4>
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
                        <a href="https://api.whatsapp.com/send/?phone=5511987201303&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0" class="hover:text-secondary transition">
                            Planejamento
                        </a>
                    </li>
                    <li>
                        <a href="https://www.educafire.com.br/mentoria" class="hover:text-secondary transition">
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
                <h4 class="text-lg sm:text-xl font-semibold text-text-high">Contato e endereço</h4>
                <p class="font-medium text-text-medium text-sm sm:text-base">contato@firece.com.br</p>
                <div class="flex items-center gap-2">
                    <img src="{{ asset('images/brasil-flag.png') }}" alt="Phone"
                         class="w-6 sm:w-7 h-4 sm:h-5 object-contain rounded-sm">
                    <p class="text-text-medium text-sm sm:text-base">(11) 98720-1303</p>
                </div>
            </div>

            <div class="flex flex-col gap-y-3 sm:gap-y-4 col-span-1 lg:col-span-2 xl:col-span-2">
                <h4 class="text-lg sm:text-xl font-semibold text-text-high">Nossa Newsletter</h4>
                <p class="text-text-medium text-sm sm:text-base">
                    Envie nos o seu email e receba as melhores notícias e textos sobre o que
                    acontece no mercado financeiro
                </p>
                <form class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4">
                    <input type="email" placeholder="Seu email" id="email"
                           class="flex-1 px-3 sm:px-4 py-2 sm:py-3 border border-outline-dark rounded-lg focus:border-primary focus:outline-none text-text-high bg-transparent placeholder:text-text-medium text-sm sm:text-base">
                    <x-button type="submit"
                                            class="bg-primary px-4 py-2 sm:py-3 rounded-lg hover:bg-primary hover:text-primary-content focus:border-primary focus:ring-2 focus:ring-primary focus:outline-none text-sm sm:text-base whitespace-nowrap">
                        Inscrever-se
                    </x-button>
                </form>
            </div>

        </div>
    </div>

</footer>
