@props([
    'headline' => '',
    'description' => '',
    'button' => ''
])

<div class="lg:w-1/2 bg-white/10 dark:bg-black/20 backdrop-blur-xl rounded-3xl p-10 shadow-2xl border border-white/20 dark:border-gray-800 animate-fade-in">
    <h1 class="text-5xl sm:text-6xl font-extrabold leading-tight mb-6 drop-shadow-lg tracking-tight">
        {{ str($headline)->wordWrap(12) }}
    </h1>
    <p class="max-w-lg text-gray-200 mb-8 text-lg animate-fade-in delay-200">
        {{ str($description) }}
    </p>
    <a
        href="#agende"
        class="inline-block border-2 border-orange-500 text-orange-500 uppercase font-semibold py-4 px-8 rounded-full hover:bg-orange-500 hover:text-white transition shadow-xl animate-bounce focus:outline-none focus:ring-2 focus:ring-orange-400 backdrop-blur-lg bg-white/10 dark:bg-black/20"
        aria-label="Agende sua análise"
    >
                <span class="flex items-center gap-2">
                    <svg class="w-6 h-6 animate-spin-slow" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/></svg>
                    Agende sua análise
                </span>
    </a>
</div>
