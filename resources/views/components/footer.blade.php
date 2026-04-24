<div class="border-border-base bg-elevation-01dp mt-20 border-t px-6 py-8 sm:px-12 lg:px-24">
    <div class="flex flex-col gap-7">
        <div class="flex flex-col items-start justify-between gap-8 lg:flex-row lg:items-center">
            <div class="flex flex-col gap-4">
                <x-logo />
                <p class="text-text-medium max-w-xs font-medium">Transformando negócios com soluções inteligentes e conectadas.</p>
            </div>

            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 sm:gap-16 lg:grid-cols-3 lg:gap-32">
                <div class="flex flex-col gap-4">
                    <h3 class="text-xxxs text-text-high font-bold tracking-wider uppercase">Empresa</h3>
                    <a href="{{ route('home') }}" class="text-text-medium hover:text-text-high transition-colors"
                        >Home</a
                    >
                    <a href="#" class="text-text-medium hover:text-text-high transition-colors">Key Account</a>
                </div>

                <div class="flex flex-col gap-4">
                    <h3 class="text-xxxs text-text-high font-bold tracking-wider uppercase">Suporte</h3>
                    <a href="#" class="text-text-medium hover:text-text-high transition-colors">Termos e privacidade</a>
                    <a href="#" class="text-text-medium hover:text-text-high transition-colors">Junte-se a nós</a>
                </div>

                <div class="flex flex-col gap-4">
                    <h3 class="text-xxxs text-text-high font-bold tracking-wider uppercase">Redes sociais</h3>
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
