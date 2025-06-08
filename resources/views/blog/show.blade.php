<x-layout.guest>

    @section('title', $post->meta_title . ' - ' . config('app.name', 'Laravel') )
    {{--@section('indexation', $post->indexation)--}}

    {{--@section('meta')--}}
    {{--    <link rel="canonical" href="{{ $post->canonical }}"/>--}}
    {{--    <meta name="description" content="{{ $post->meta_description }}">--}}
    {{--    <meta name="keywords" content="{{ $post->meta_keywords }}">--}}
    {{--    <meta property="og:title" content="{{$post->opengraph_title}}">--}}
    {{--    <meta property="og:type" content="website">--}}
    {{--    <meta property="og:url" content="{{ $post->url }}">--}}
    {{--    <meta property="og:description" content="{{ $post->opengraph_description }}">--}}
    {{--    <meta property="og:image" content="{{ $post->opengraph_picture?->url }}"/>--}}
    {{--    <meta property="og:image:alt" content="{{ $post->opengraph_picture_alt }}"/>--}}
    {{--@endsection--}}

    <div class="min-h-screen bg-black text-white pt-20">
        <x-blog.article/>
        <section class="py-24 bg-zinc-950">
            <div class="container mx-auto px-4 md:px-8">
                <div class="max-w-6xl mx-auto" style="opacity: 1; will-change: opacity, transform; transform: none;">
                    <h2 class="text-2xl font-bold mb-12 text-center md:text-3xl">
                        Artigos <span class="text-amber-500">Relacionados</span>
                    </h2>
                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        @foreach(collect([$post]) as $relatedPost)
                            <x-blog.card-item
                                :title="$relatedPost->title"
                                :subtitle="$relatedPost->excerpt"

                                :url="route('blog.show', ['post' => $relatedPost->slug])"
                            />
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>



</x-layout.guest>
