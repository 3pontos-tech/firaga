@props([
    'headline' => '',
    'description' => '',
    'buttonText' => '',
    'buttonUrl' => ''
])

<div
    class="w-full max-w-full sm:max-w-xl md:max-w-2xl lg:w-1/2 md:bg-bg bg-none  backdrop-blur-xl rounded-2xl sm:rounded-3xl p-6 sm:p-10 shadow-xl sm:shadow-2xl border-none md:border md:border-base animate-fade-in mx-auto">
    <h1 class="font-primary text-2xl sm:text-3xl md:text-4xl lg:text-4xl font-semibold leading-tight mb-4 sm:mb-6 drop-shadow-lg tracking-tight text-heading text-center sm:text-left">
        {{ str($headline) }}
    </h1>
    <p class="max-w-full sm:max-w-lg text-base sm:text-md text-body dark:text-body mb-6 sm:mb-8 text-center sm:text-left animate-fade-in delay-200">
        {{ str($description) }}
    </p>
    <a
        href="{{ $buttonUrl }}"
        class="block sm:inline-block w-full sm:w-auto border-2 border-brand text-brand uppercase font-semibold py-2 px-4 sm:py-3 sm:px-4 rounded-4 hover:bg-brand hover:text-heading dark:hover:text-heading transition shadow-lg sm:shadow-xl focus:outline-none focus:ring-2 focus:ring-brand-hover backdrop-blur-lg bg-bg text-center"
        aria-label="Agende sua análise"
    >
        <span class="flex justify-center sm:justify-start items-center gap-2">
            {{ $buttonText }}
        </span>
    </a>
</div>
