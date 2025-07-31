@php
    use App\View\TemplateRenderer;
    $builder = TemplateRenderer::make();
    $theme = $page->theme;
@endphp

<x-layout.guest xmlns:x-slot="http://www.w3.org/1999/html">


    <x-slot:metatags>
        <title>{{ ($page->meta_title  ?? $page->title) . ' - ' . config('app.name', 'Laravel') }}</title>
        <link rel="canonical" href="{{ $page?->url() ?? '' }}"/>
        <meta name="description" content="{{ $page?->meta_description ?? '' }}">
        <meta name="keywords" content="{{ $page?->meta_keywords ?? '' }}">
        <meta property="og:title" content="{{$page?->opengraph_title ?? ''}}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ $page?->url() ?? '' }}">
        <meta property="og:description" content="{{ $page?->opengraph_description }}">
        <meta property="og:image"
              content="{{ $page?->openGraphPicture?->getSignedUrl() ?? asset('images/meta-logo.png') }}"/>
        <meta property="og:image:alt" content="{{ $page?->opengraph_picture_alt }}"/>
    </x-slot:metatags>

    <x-slot:navbar>
        <x-navbar :bg="$theme->getPageBackground()"/>
    </x-slot:navbar>

    <div class="{{ $theme->getPageBackground() }}">
        @foreach($page->content as $componentPayload)
            {!! $builder->render($page, $componentPayload['type'], $componentPayload['data']) !!}
        @endforeach

        <x-slot:footer>
            <x-layout.shared.footer :bg="$theme->getPageBackground()"/>
        </x-slot:footer>
    </div>
</x-layout.guest>
