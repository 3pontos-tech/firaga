<x-layout.guest>
    <!-- Blog Section with Enhanced Styling -->
    <x-blog.hero/>

    <section class="py-6 lg:py-12">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-[300px_1fr] gap-6 lg:gap-12">
                <aside class="space-y-8">
                    <x-blog.aside-authors/>
                    <x-blog.aside-categories/>
                </aside>
                <div class="space-y-8 lg:space-y-12">
                    <section class="relative">
                        <div class="flex items-center gap-3  px-2">
                            <x-heroicon-o-star class="h-5 w-5 text-fire-500 fill-fire-500"></x-heroicon-o-star>
                            <h2 class="text-xl font-bold">Artigo em Destaque</h2>
                        </div>
                        <div>
                            <x-blog.featured-item/>
                        </div>
                    </section>
                    <section>
                        <h2 class="text-xl font-bold mb-8">Últimos Artigos</h2>
                        <div class="space-y-6">
                            @foreach($posts as $post)
                                <x-blog.row-item
                                    :title="$post->title"
                                    :subtitle="$post->excerpt"
                                    author="Carlos Silva"
                                    role="Especialista em Planejamento Financeiro"
                                    :url="route('blog.show', ['post' => $post->slug])"
                                />
                            @endforeach
                        </div>
                        {{ $posts->links('pagination::tailwind') }}
                    </section>
                </div>
            </div>
        </div>
    </section>
</x-layout.guest>
