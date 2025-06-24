<section class="py-24 bg-deep">
    <div class="container mx-auto px-4 md:px-8">
        <div class="max-w-6xl mx-auto" style="opacity: 1; will-change: opacity, transform; transform: none;">
            <h2 class="text-2xl font-bold text-heading mb-12 text-center md:text-3xl">
                Artigos <span class="textneutral">Relacionados</span>
            </h2>
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach($relatedPosts as $relatedPost)
                    <x-blog.card-item
                        :post="$relatedPost"
                    />
                @endforeach
            </div>
        </div>
    </div>
</section>
