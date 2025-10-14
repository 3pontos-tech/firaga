import './bootstrap';

// document.addEventListener('alpine:init', () => {
//     Alpine.store('theme', {
//         dark: localStorage.getItem('theme') === 'dark' || window.matchMedia('(prefers-color-scheme: dark)').matches,
//         toggle() {
//             this.dark = !this.dark;
//             localStorage.setItem('theme', this.dark ? 'dark' : 'metallic');
//             document.documentElement.classList.toggle('dark', this.dark);
//             document.dispatchEvent(new CustomEvent('theme-changed', {
//                 detail: {theme: this.dark ? 'dark' : 'metallic'}
//             }));
//         }
//     });
//
//     const savedTheme = Alpine.store('theme').dark || true;
//     document.documentElement.classList.toggle('dark', savedTheme);
// });
