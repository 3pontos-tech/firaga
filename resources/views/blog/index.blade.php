<x-layout.guest>
    <x-partials.grid-hero>
        Blog <span class="textneutral">{{ config('app.name') }}</span>
    </x-partials.grid-hero>
    <section class="py-6 lg:py-12">
        <div class="container mx-auto ">
            <div class="flex gap-6 lg:gap-12 mx-4">
                <div class="flex-1 lg:flex-2">
                    @if($featuredPost)
                        <section>
                            <x-blog.featured-item :post="$featuredPost"/>
                        </section>
                    @endif
                    <section>
                        <h2 class="text-xl text-heading font-bold mb-8">Últimos Artigos</h2>
                        <div class="space-y-6">
                            @foreach($posts as $post)
                                <x-blog.row-item :post="$post"/>
                            @endforeach
                        </div>
                        {{ $posts->links('components.layout.shared.paginator') }}
                    </section>
                </div>
            </div>
        </div>
    </section>
</x-layout.guest>
