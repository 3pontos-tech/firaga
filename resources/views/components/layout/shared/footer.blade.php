<footer class="relative bg-base-300 text-base-content py-16 ">
    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 animate-fade-in">
            <div class="space-y-6">
                <a href="/" class="flex flex-col  gap-1 ">
                    <div class="flex items-center space-x-2">
                        <x-logo :minimal="true" class="w-8 h-8"/>
                        <p class="text-2xl font-semibold text-base-content">Fire|Ce</p>
                    </div>
                    <span class="text-base-content/70 text-sm">
                        Investimentos Inteligentes e Planejamento Financeiro.
                    </span>
                </a>

                <!-- Social Icons -->
                <div class="flex space-x-4 text-neutral">
                    <!-- LinkedIn -->
                    <a href="#"
                       class="w-10 h-10 bg-base-200 hover:text-primary text-base-content/60 rounded-full flex items-center justify-center transition group shadow-lg overflow-hidden">
                        <x-filament::icon icon="fab-linkedin" class="w-5 h-5 "/>
                    </a>
                    <!-- Instagram -->
                    <a href="#"
                       class="w-10 h-10 bg-base-200 hover:text-primary text-base-content/60  rounded-full flex items-center justify-center transition group shadow-lg overflow-hidden">
                        <x-filament::icon icon="fab-instagram" class="w-5 h-5 "/>
                    </a>
                    <!-- WhatsApp -->
                    <a href="#"
                       class="w-10 h-10 bg-base-200 hover:text-primary text-base-content/60  rounded-full flex items-center justify-center transition group shadow-lg overflow-hidden">
                        <x-filament::icon icon="fab-whatsapp" class="w-5 h-5 "/>
                    </a>
                </div>
            </div>

            <!-- Column 2: Links de Serviços -->
            <div>
                <h4 class="text-xl font-semibold text-base-content mb-4">Links de Serviços</h4>
                <ul class="space-y-2 ">
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

            <!-- Column 3: Informações de Contato -->
            <div class="flex justify-evenly flex-col gap-2">
                <div>
                    <h4 class="text-xl font-semibold text-base-content mb-2">Nosso Endereço</h4>
                    <p class="mb-4 text-base-content/90">
                        Dr. Cardoso de Mello, 1666, Cj. 92<br/>
                        Vila Olímpia, São Paulo.
                    </p>
                </div>
                <div>
                    <h4 class="text-xl font-semibold text-base-content mb-2">Nosso Endereço</h4>
                    <p class="font-medium text-base-content/90">contato@firece.com.br</p>
                    <p class="mt-2 text-base-content/90">+55 11 98720-1303</p>
                </div>
            </div>
            <!-- Column 4: Newsletter -->
            <div>
                <h4 class="text-xl font-semibold text-base-content mb-4">Nossa Newsletter</h4>
                <p class="text-base-content/90 mb-6">
                    Envie nos o seu email e receba as melhores notícias e textos sobre o que
                    acontece no mercado financeiro
                </p>
                <form class="flex flex-col sm:flex-row items-center sm:space-x-3 space-y-3 sm:space-y-0">
                    <input type="email" placeholder="Seu email" id="email"
                           class="px-4 py-3 border border-base-200/70 bg-base-200/50 rounded-lg focus:border-primary focus:outline-none">
                    <button type="submit"
                            class="bg-neutral text-primary-content px-4 py-3 rounded-lg hover:bg-neutral-hover transition-colors hover:bg-primary hover:text-primary-content focus:border-primary focus:ring-2 focus:ring-primary focus:outline-none">
                        Ok
                    </button>
                </form>
            </div>
        </div>
    </div>

</footer>
