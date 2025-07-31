<x-layout.guest>
    <x-slot:navbar>
        <x-navbar/>
    </x-slot:navbar>

    <x-slot:metatags>
        <title>{{ $post->meta_title . ' - ' . config('app.name', 'Laravel') }}</title>
        <link rel="canonical" href="{{ $post?->canonical ?? '' }}"/>
        <meta name="description" content="{{ $post?->meta_description ?? '' }}">
        <meta name="keywords" content="{{ $post?->meta_keywords ?? '' }}">
        <meta property="og:title" content="{{$post?->opengraph_title ?? ''}}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ $post?->url() ?? '' }}">
        <meta property="og:description" content="{{ $post?->opengraph_description }}">
        <meta property="og:image" content="{{ $post?->openGraphPicture?->getSignedUrl() ?? asset('images/meta-logo.png') }}"/>
        <meta property="og:image:alt" content="{{ $post?->opengraph_picture_alt }}"/>
    </x-slot:metatags>
    <div class="min-h-screen  bg-base-100 ">
        <x-blog.article :post="$post"/>
        <x-blog.related-articles :related-posts="$relatedPosts"/>
    </div>


    <x-slot:footer>
        <x-layout.shared.footer/>
    </x-slot:footer>

</x-layout.guest>
