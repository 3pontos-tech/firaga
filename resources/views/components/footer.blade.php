<div class="border-border-base bg-elevation-01dp mt-20 border-t px-6 py-8 sm:px-12 lg:px-24">
    <div class="flex flex-col gap-7">
        <div class="flex flex-col items-start justify-between gap-8 lg:flex-row lg:items-center">
            <div class="flex flex-col gap-4">
                <x-logo-with-text size="sm" :clickable="false" class="text-brand-primary metallic:text-text-light" />
                <p class="text-text-medium max-w-xs font-medium">Investimentos Inteligentes e Planejamento Financeiro.</p>
            </div>

            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 sm:gap-16 lg:grid-cols-3 lg:gap-32">
                <div class="flex flex-col gap-4">
                    <h3 class="text-xxs text-text-high font-bold tracking-wider uppercase">Links e serviços</h3>
                    <a href="{{ route('home') }}" class="text-text-medium hover:text-text-high transition-colors"
                        >Home</a
                    >
                    <a
                        href="{{ route('nossos-servicos') }}"
                        class="text-text-medium hover:text-text-high transition-colors"
                        >Nossos Serviços</a
                    >
                    <a href="{{ route('key-account') }}" class="text-text-medium hover:text-text-high transition-colors"
                        >Key Account</a
                    >
                    <a
                        href="{{ route('code-capital') }}"
                        class="text-text-medium hover:text-text-high transition-colors"
                        >Code Capital</a
                    >
                    <a href="{{ route('parcerias') }}" class="text-text-medium hover:text-text-high transition-colors"
                        >Parcerias</a
                    >
                    <a href="{{ route('blog') }}" class="text-text-medium hover:text-text-high transition-colors"
                        >Blog</a
                    >
                    <a
                        href="{{ route('trabalhe-conosco') }}"
                        class="text-text-medium hover:text-text-high transition-colors"
                        >Trabalhe Conosco</a
                    >
                </div>

                <div class="flex flex-col gap-4">
                    <h3 class="text-xxs text-text-high font-bold tracking-wider uppercase">Suporte</h3>
                    <a href="#" class="text-text-medium hover:text-text-high transition-colors">Termos e privacidade</a>
                    <a
                        href="{{ route('trabalhe-conosco') }}"
                        class="text-text-medium hover:text-text-high transition-colors"
                        >Junte-se a nós</a
                    >
                </div>

                <div class="flex flex-col gap-4">
                    <h3 class="text-xxs text-text-high font-bold tracking-wider uppercase">Redes sociais</h3>
                    <a href="#" class="text-text-medium hover:text-text-high transition-colors">Twitter</a>
                    <a href="#" class="text-text-medium hover:text-text-high transition-colors">Instagram</a>
                    <a href="#" class="text-text-medium hover:text-text-high transition-colors">LinkedIn</a>
                </div>
            </div>
        </div>

        <hr class="border-outline-low" />

        <div class="flex items-center justify-between">
            <p class="text-text-high font-bold">&copy; {{ now()->year }} {{ config('app.name') }}</p>
            <p class="text-text-high font-bold">Todos os direitos reservados</p>
        </div>
    </div>
</div>
