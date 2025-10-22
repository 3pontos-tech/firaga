{{--@php--}}
{{--    use App\View\TemplateRenderer;--}}
{{--    $builder = TemplateRenderer::make();--}}
{{--@endphp--}}

<x-layout.guest>
{{--    @foreach($page->content as $componentPayload)--}}
{{--        {!! $builder->render($componentPayload['type'], $componentPayload['data']) !!}--}}
{{--    @endforeach--}}

    <x-slot:navbar>
        <x-navbar />
    </x-slot:navbar>

    <x-sections.video-full-width
        badge="vai caralho"
        heading="fodase essa porra"
        description="descrição da porra"
    />
</x-layout.guest>
