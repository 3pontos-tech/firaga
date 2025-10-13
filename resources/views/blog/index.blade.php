<x-layout.guest>
    <x-slot:navbar>
        <x-navbar/>
    </x-slot:navbar>

    <section class="bg-elevation-surface">
        <div class="container mx-auto">
            <div class="flex gap-6 lg:gap-12 mx-4">
                <div class="flex-1 lg:flex-2">
                    @if ($featuredPost)
                        <section>
                            <x-blog.featured-item :post="$featuredPost"/>
                        </section>
                    @endif
                    <section class="py-20">
                        <div class="flex flex-col mb-8">
                            <x-badge>
                                <x-slot:icon>
                                    <x-filament::icon icon="firece-logo" class="h-5 w-5 text-icon-high group-hover:text-brand-accent shrink-0" />
                                </x-slot:icon>
                                Invista agora com a Fire|ce
                            </x-badge>
                            <h2 class="text-5xl text-text-high font-bold mb-6">Últimos Artigos</h2>
                            <p class="text-text-medium text-sm mb-6">
                                Aqui você vai encontrar conteúdo de verdade feito por pessoas de verdade, que entendem e
                                vivenciam todos os dias o mercado financeiro. Dessa forma, podem ter certeza que todo o
                                artigo contém informações reais, verificadas e de qualidade.
                            </p>
                        </div>
                        <div class="space-y-6">
                            @foreach ($posts as $post)
                                <x-blog.row-item :post="$post"/>
                            @endforeach
                        </div>
                        {{ $posts->links('components.layout.shared.paginator') }}
                    </section>
                </div>
            </div>
        </div>
    </section>

    <x-slot:footer>
        <x-layout.shared.footer/>
    </x-slot:footer>
</x-layout.guest>
