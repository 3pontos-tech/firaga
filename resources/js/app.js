document.addEventListener('alpine:init', () => {
    window.Alpine.data('splash', ({ storageKey }) => ({
        active: true,
        logoHidden: false,
        sliding: false,
        init() {
            if (sessionStorage.getItem(storageKey)) {
                this.active = false;
                return;
            }

            setTimeout(() => {
                this.logoHidden = true;
            }, 700);

            setTimeout(() => {
                this.sliding = true;
            }, 1000);

            setTimeout(() => {
                this.active = false;
                document.documentElement.classList.remove('overflow-hidden');
                sessionStorage.setItem(storageKey, '1');
            }, 1600);
        },
    }));
});
