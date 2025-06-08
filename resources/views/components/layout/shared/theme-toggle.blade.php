<button
    x-data="{ dark: localStorage.getItem('theme') === 'dark' }"
    x-init="$watch('dark', val => { document.documentElement.classList.toggle('dark', val); localStorage.setItem('theme', val ? 'dark' : 'light') })"
    @click="dark = !dark"
    :class="dark ? 'bg-gray-800 text-white' : 'bg-white text-gray-800'"
    class="rounded p-2 transition-colors duration-200 border border-gray-300 dark:border-gray-700"
    aria-label="Toggle theme"
>
    <span x-show="!dark">🌞</span>
    <span x-show="dark">🌙</span>
</button>
