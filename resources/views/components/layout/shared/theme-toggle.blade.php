@props([
    'class' => ''
])

<button
    x-data="{
        isDark: localStorage.getItem('theme') === 'dark',
        toggle() {
            if (typeof $store !== 'undefined' && $store.theme) {
                $store.theme.toggle();
            } else {
                this.isDark = !this.isDark;
                localStorage.setItem('theme', this.isDark ? 'dark' : 'light');
                document.documentElement.classList.toggle('dark', this.isDark);
                document.dispatchEvent(new CustomEvent('theme-changed', {
                    detail: { theme: this.isDark ? 'dark' : 'light' }
                }));
            }
        }
    }"

    @click="toggle()"

    class="rounded-lg p-2 transition-all duration-300 text-icon-high shadow-sm {{ $class }}"
    aria-label="Toggle theme"
>
    <span x-show="isDark" x-transition:enter="transition-opacity duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>
    </span>
    <span x-show="!isDark" x-transition:enter="transition-opacity duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
        </svg>
    </span>
</button>
