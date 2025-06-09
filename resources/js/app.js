import './bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();


    document.addEventListener('alpine:init', () => {
    Alpine.store('theme', {
        dark: localStorage.getItem('theme') === 'dark' || window.matchMedia('(prefers-color-scheme: dark)').matches,
        toggle() {
            this.dark = !this.dark;
            localStorage.setItem('theme', this.dark ? 'dark' : 'light');
            document.documentElement.classList.toggle('dark', this.dark);
            document.dispatchEvent(new CustomEvent('theme-changed', {
                detail: { theme: this.dark ? 'dark' : 'light' }
            }));
        }
    });

    // Apply on load to prevent FOUC

    document.documentElement.classList.toggle('dark', Alpine.store('theme').dark);
});
