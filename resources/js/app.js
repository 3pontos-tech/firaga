// ---------- Splash (Alpine) ----------

document.addEventListener('alpine:init', () => {
    window.Alpine.data('splash', ({ storageKey }) => ({
        active: true,
        logoHidden: false,
        sliding: false,
        init() {
            if (sessionStorage.getItem(storageKey)) {
                this.active = false;
                document.dispatchEvent(new CustomEvent('splash:done'));
                return;
            }

            setTimeout(() => {
                this.logoHidden = true;
            }, 700);

            setTimeout(() => {
                this.sliding = true;
                document.dispatchEvent(new CustomEvent('splash:done'));
            }, 1000);

            setTimeout(() => {
                this.active = false;
                document.documentElement.classList.remove('overflow-hidden');
                sessionStorage.setItem(storageKey, '1');
            }, 1600);
        },
    }));
});

// ---------- Reveal on scroll ----------

(() => {
    const STAGGER_DEFAULT = 120;

    let splashPassed =
        document.documentElement.classList.contains('splash-seen') || !document.querySelector('[data-splash]');

    const pending = new Set();

    const reveal = (el) => {
        el.classList.add('is-visible');
    };

    document.addEventListener('splash:done', () => {
        splashPassed = true;
        pending.forEach((el) => {
            reveal(el);
            observer.unobserve(el);
        });
        pending.clear();
    });

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;

                if (!splashPassed) {
                    pending.add(entry.target);
                    return;
                }

                reveal(entry.target);
                observer.unobserve(entry.target);
            });
        },
        { rootMargin: '0px 0px -10% 0px', threshold: 0.1 },
    );

    const observeReveals = (root = document) => {
        root.querySelectorAll('[data-reveal]:not(.is-visible)').forEach((el) => {
            const parent = el.parentElement;
            if (parent && parent.hasAttribute('data-reveal-stagger') && !el.style.getPropertyValue('--reveal-delay')) {
                const step = parseInt(parent.getAttribute('data-reveal-stagger'), 10) || STAGGER_DEFAULT;
                const siblings = Array.from(parent.querySelectorAll(':scope > [data-reveal]'));
                el.style.setProperty('--reveal-delay', `${siblings.indexOf(el) * step}ms`);
            }
            observer.observe(el);
        });
    };

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => observeReveals());
    } else {
        observeReveals();
    }

    document.addEventListener('livewire:navigated', () => observeReveals());
})();
