@php
    /** @var \Livewire\Features\SupportTesting\Testable? $livewire */
    $livewire = $getLivewire();

    $content = null;

    if ($livewire && isset($livewire->data) && is_array($livewire->data)) {
        $content = $livewire->data['content'] ?? null;
    }

    // Normalize to an array/object to pretty print, otherwise keep as-is
    $isSerializable = is_array($content) || is_object($content);

    $pretty = $isSerializable
        ? json_encode($content, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
        : (is_string($content) ? $content : null);

    $raw = $isSerializable
        ? json_encode($content, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
        : (is_string($content) ? $content : null);

    $count = 0;
    if (is_array($content)) {
        $count = count($content);
    } elseif ($content instanceof Countable) {
        $count = count($content);
    }
@endphp

<link rel="stylesheet" href="https://jmblog.github.io/color-themes-for-highlightjs/css/themes/tomorrow-night.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/styles/atom-one-dark.css"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/highlight.min.js"></script>



<div  class="rounded-lg border overflow-auto  border-gray-50 bg-gray-50 shadow-sm dark:border-gray-950 dark:bg-gray-950">
    <div x-data="{ pretty: true, raw: @js($raw), prettyText: @js($pretty) }" class="h-f">
        @if (blank($pretty) && blank($raw))
            <div class="p-4 text-sm text-gray-500 dark:text-gray-400">
                Nenhum conteúdo para exibir ainda. Comece adicionando componentes ao conteúdo da página.
            </div>
        @else
            <pre ><code x-text="pretty ? (prettyText ?? '') : (raw ?? '')"></code></pre>
        @endif
    </div>
</div>

<script>


    hljs.highlightAll();
</script>
