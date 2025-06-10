@props([
    'headline' => '',
    'description' => '',
    'buttonText' => '',
    'buttonUrl' => ''
])

<div
    class="lg:w-1/2 bg-bg/10 dark:bg-surface/20 backdrop-blur-xl rounded-3xl p-10 shadow-2xl border border-base animate-fade-in">
    <h1 class="text-5xl sm:text-6xl font-extrabold leading-tight mb-6 drop-shadow-lg tracking-tight text-heading">
        {{ str($headline)->wordWrap(12) }}
    </h1>
    <p class="max-w-lg text-body dark:text-body mb-8 text-lg animate-fade-in delay-200">
        {{ str($description) }}
    </p>
    <a
        href="{{ $buttonUrl }}"
        class="inline-block border-2 border-brand text-brand uppercase font-semibold py-4 px-8 rounded-full hover:bg-brand hover:text-heading dark:hover:text-heading transition shadow-xl focus:outline-none focus:ring-2 focus:ring-brand-hover backdrop-blur-lg bg-bg/10 dark:bg-surface/20"
        aria-label="Agende sua análise"
    >
        <span class="flex items-center gap-2">
            {{ $buttonText }}
        </span>
    </a>
</div>
