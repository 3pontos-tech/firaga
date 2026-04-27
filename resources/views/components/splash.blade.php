@props ([
    'from' => 'var(--color-brand-primary)',
    'to' => 'var(--color-brand-secondary)',
    'logoClass' => 'text-white',
    'key' => null
])

@php
    $key ??= request()->path();
    $storageKey = 'splash:seen:' . $key;
@endphp

<script>
    (function () {
        try {
            if (sessionStorage.getItem({!! json_encode($storageKey) !!})) {
                document.documentElement.classList.add('splash-seen');
            } else {
                document.documentElement.classList.add('overflow-hidden');
            }
        } catch (e) {}
    })();
</script>

<div
    data-splash
    x-data="splash({ storageKey: @js($storageKey) })"
    x-show="active"
    x-init="init()"
    class="splash-overlay fixed inset-0 z-[100] flex items-center justify-center text-white"
    style="background: linear-gradient(to bottom, {{ $from }}, {{ $to }}); display: flex;"
    :class="{ 'splash-overlay--sliding': sliding }"
    aria-hidden="true"
>
    <div class="splash-logo" :class="{ 'splash-logo--hidden': logoHidden }">
        <x-logo-with-text size="xl" :clickable="false" class="{{ $logoClass }}" />
    </div>
</div>
