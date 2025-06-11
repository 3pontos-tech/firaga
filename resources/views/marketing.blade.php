@php
    use App\View\TemplateRenderer;
    $builder = TemplateRenderer::make();
@endphp

<x-layout.guest>
    @foreach($page->content as $componentPayload)
        {!! $builder->render($componentPayload['type'], $componentPayload['data']) !!}
    @endforeach
</x-layout.guest>
