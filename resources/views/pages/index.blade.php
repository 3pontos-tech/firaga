@php
    use App\View\TemplateRenderer;
    $builder = TemplateRenderer::make();
@endphp

<x-layout.guest>

    <x-slot:metatags>
        <title>{{ ($page->meta_title  ?? $page->title) . ' - ' . config('app.name', 'Laravel') }}</title>
        <link rel="canonical" href="{{ $page?->url() ?? '' }}"/>
        <meta name="description" content="{{ $page?->meta_description ?? '' }}">
        <meta name="keywords" content="{{ $page?->meta_keywords ?? '' }}">
        <meta property="og:title" content="{{$page?->opengraph_title ?? ''}}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ $page?->url() ?? '' }}">
        <meta property="og:description" content="{{ $page?->opengraph_description }}">
        <meta property="og:image" content="{{ $page?->openGraphPicture?->url ?? 'https://github.com/danielhe4rt.png' }}"/>
        <meta property="og:image:alt" content="{{ $page?->opengraph_picture_alt }}"/>
    </x-slot:metatags>

    @foreach($page->content as $componentPayload)
        {!! $builder->render($componentPayload['type'], $componentPayload['data']) !!}
    @endforeach
    <br>
</x-layout.guest>
