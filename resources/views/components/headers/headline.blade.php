@props([
    "headline" => "",
    "description" => "",
    "buttonText" => "",
    "buttonUrl" => "",
    "badge" => null
])

<div
    class="animate-fade-in mx-auto w-full max-w-full p-6 text-center sm:max-w-xl sm:p-10 md:max-w-7xl lg:w-1/2 lg:text-left">
    @if($badge)
        <div class="hidden border-primary mb-3 inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold text-primary transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground">
            {{ $badge }}
        </div>
    @endif

    <h1
        class="text-base-content mb-4 text-center text-2xl leading-tight font-semibold tracking-tight drop-shadow-lg sm:mb-6 sm:text-3xl md:text-4xl lg:text-left lg:text-4xl"
    >
        {{ str($headline) }}
    </h1>
    <p
        class="sm:text-md text-base-content/90 animate-fade-in mb-6 max-w-full text-center text-base delay-200 sm:mb-8 sm:max-w-lg lg:text-left"
    >
        {{ str($description) }}
    </p>
    <a
        href="{{ $buttonUrl }}"
        class="border-primary text-primary rounded-4 hover:bg-primary hover:text-primary-content focus:ringneutral bg-base-200 block w-full border-2 px-4 py-2 text-center font-semibold uppercase shadow-lg backdrop-blur-lg transition focus:ring-2 focus:outline-none sm:inline-block sm:w-auto sm:px-4 sm:py-3 sm:shadow-xl"
        aria-label="Agende sua análise"
    >
        <span class="flex items-center justify-center gap-2 sm:justify-start">
            {{ $buttonText }}
        </span>
    </a>
</div>
