@props([
    "headline" => "",
    "description" => "",
    "buttonText" => "",
    "buttonUrl" => "",
    "badge" => null
])

<div
    class="animate-fade-in mx-auto w-full max-w-full text-center sm:max-w-xl md:max-w-7xl lg:w-2/3 lg:text-left">
    @if($badge)
        <div class="hidden border-primary mb-3 inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold text-primary transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground">
            {{ $badge }}
        </div>
    @endif

    <h1
        class="text-text-high mb-4 text-center text-2xl font-bold  drop-shadow-lg sm:mb-6 sm:text-3xl md:text-4xl lg:text-left lg:text-[80px] "
    >
        {{ str($headline) }}
    </h1>
    <p
        class="sm:text-md text-text-high dark:text-text-medium animate-fade-in mb-6 max-w-full text-center text-base delay-200 sm:mb-8 lg:text-left lg:text-xl font-medium"
    >
        {{ str($description) }}
    </p>
    <a
        href="{{ $buttonUrl }}"
        class="text-text-light rounded-lg bg-brand-primary hover:text-primary-content focus:ringneutral bg-base-200 block w-full px-4 py-2 text-center font-semibold shadow-lg backdrop-blur-lg transition focus:ring-2 focus:outline-none sm:inline-block sm:w-auto sm:px-4 sm:py-3 sm:shadow-xl"
        aria-label="Agende sua análise"
    >
        <span class="flex items-center justify-center gap-2 sm:justify-start">
            {{ $buttonText }}
        </span>
    </a>
</div>
