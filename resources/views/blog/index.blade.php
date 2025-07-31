<x-layout.guest>
    <x-slot:navbar>
        <x-navbar/>
    </x-slot:navbar>

    <x-partials.grid-hero>
        Blog <span class="text-primary">{{ config('app.name') }}</span>
    </x-partials.grid-hero>
    <section class="bg-elevation-surface">
        <div class="container mx-auto">
            <div class="flex gap-6 lg:gap-12 mx-4">
                <div class="flex-1 lg:flex-2">
                    @if ($featuredPost)
                        <section>
                            <x-blog.featured-item :post="$featuredPost" />
                        </section>
                    @endif
                    <section class="py-20">
                        <div class="flex flex-col gap-y-6 mb-8">
                            <h2 class="text-5xl text-text-high font-bold">Últimos Artigos</h2>
                            <p class="text-text-medium text-sm ">
                                Lorem ipsum dolor sit amet, consectetur adispicing elit. Maecenas non gravida dui.
                                Nullam tincidunt porta magna
                            </p>
                        </div>
                        <div class="space-y-6">
                            @foreach ($posts as $post)
                                <x-blog.row-item :post="$post" />
                            @endforeach
                        </div>
                        {{ $posts->links('components.layout.shared.paginator') }}
                    </section>
                </div>
            </div>
        </div>
    </section>

    <x-slot:footer>
        <x-layout.shared.footer />
    </x-slot:footer>
</x-layout.guest>
