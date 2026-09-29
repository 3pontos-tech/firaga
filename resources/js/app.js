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

// ---------- Lead Quiz (Alpine) ----------

const WHATSAPP_LINK = /^https:\/\/(api\.whatsapp\.com\/send|wa\.me\/)/;

const uuid = () => {
    if (window.crypto?.randomUUID) return window.crypto.randomUUID();

    const bytes = window.crypto.getRandomValues(new Uint8Array(16));
    bytes[6] = (bytes[6] & 0x0f) | 0x40;
    bytes[8] = (bytes[8] & 0x3f) | 0x80;
    const hex = Array.from(bytes, (byte) => byte.toString(16).padStart(2, '0')).join('');

    return `${hex.slice(0, 8)}-${hex.slice(8, 12)}-${hex.slice(12, 16)}-${hex.slice(16, 20)}-${hex.slice(20)}`;
};

// Mirrors App\Rules\BrazilianPhone::normalize() so the flow only advances with a
// number the backend will accept: optional +55 or trunk zero, DDD, 8 or 9 digits.
const normalizeBrazilianPhone = (value) => {
    let digits = value.replace(/\D/g, '');

    if ((digits.length === 12 || digits.length === 13) && digits.startsWith('55')) {
        digits = digits.slice(2);
    }

    digits = digits.replace(/^0+/, '');

    return /^[1-9]{2}(9\d{8}|[2-8]\d{7})$/.test(digits) ? `+55${digits}` : null;
};

document.addEventListener('alpine:init', () => {
    window.Alpine.data('leadQuiz', ({ steps, context, endpoint, phone = null, intro = '', fallbackUrl = null }) => ({
        steps,
        context,
        endpoint,
        phone,
        intro,
        fallbackUrl,
        isOpen: false,
        current: 0,
        input: '',
        error: '',
        answers: {},
        labels: {},
        history: [],
        submissionId: uuid(),
        submitted: false,
        origin: { href: null, label: null, page: window.location.pathname, trigger: null },

        // Keeps the modal pinned to the latest message while steps and the completion
        // box grow through their enter transitions.
        init() {
            if (this.$refs.scroller && this.$refs.chat && window.ResizeObserver) {
                new ResizeObserver(() => this.scrollToEnd()).observe(this.$refs.chat);
            }
        },

        get activeStep() {
            return this.steps[this.current] ?? null;
        },

        // Snapshotted (not reactively tied to `current`) so the outgoing step keeps
        // showing its own question/options while it plays its leave transition.
        get visibleStep() {
            const step = this.activeStep;
            return step ? { ...step, _key: this.current } : null;
        },

        get finished() {
            return this.current >= this.steps.length;
        },

        // The modal sends the visitor to the exact link they clicked, keeping its own
        // pre-filled text; the inline Home quiz builds a message out of the answers.
        get destination() {
            return WHATSAPP_LINK.test(this.origin.href ?? '') ? this.origin.href : this.fallbackUrl;
        },

        get whatsappUrl() {
            if (this.context === 'modal') return this.destination;

            const lines = this.steps.map((step) => `${step.label}: ${this.labels[step.key] ?? ''}`);
            const text = [this.intro, ...lines].join('\n');

            return `https://api.whatsapp.com/send/?phone=${this.phone}&text=${encodeURIComponent(text)}&type=phone_number&app_absent=0`;
        },

        show({ href = null, label = null, trigger = null } = {}) {
            this.origin = { href, label, page: window.location.pathname, trigger };
            this.isOpen = true;
            this.track('lead_capture_opened', { step: this.activeStep?.key ?? 'finished' });
            this.$nextTick(() => this.scrollToEnd());
        },

        close() {
            if (!this.isOpen) return;

            this.isOpen = false;
            const trigger = this.origin.trigger;
            this.$nextTick(() => trigger?.focus?.({ preventScroll: true }));
        },

        choose(option) {
            this.answer(option.value, option.label);
        },

        submitText() {
            const step = this.activeStep;
            if (!step) return;

            const value = this.input.trim();

            if (!value) {
                this.error = 'Preencha esse campo para continuar';
                return;
            }

            if (step.type === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                this.error = 'Digite um email válido';
                return;
            }

            if (step.type === 'tel') {
                const normalized = normalizeBrazilianPhone(value);

                if (!normalized) {
                    this.error = 'Digite um telefone válido com DDD';
                    return;
                }

                this.error = '';
                this.answer(normalized, value);
                return;
            }

            this.error = '';
            this.answer(value);
        },

        answer(value, label = value) {
            const step = this.activeStep;
            if (!step) return;

            this.answers[step.key] = value;
            this.labels[step.key] = label;
            this.history.push({ question: step.question, answer: label });
            this.input = '';
            this.current++;

            this.track('lead_capture_step_completed', { step: step.key, step_number: this.current });

            if (this.finished) this.submit();
        },

        // Fire-and-forget: the completion screen never waits for the CRM. The backend
        // only queues the sync, and the submission id makes a resend harmless.
        submit(attempt = 1) {
            if (this.submitted && attempt === 1) return;
            this.submitted = true;

            const payload = {
                submission_id: this.submissionId,
                context: this.context,
                ...this.answers,
                origin_page: this.origin.page,
                origin_label: this.context === 'modal' ? this.origin.label : 'Quiz da Home',
                destination: this.context === 'modal' ? this.origin.href : null,
            };

            const retry = () => attempt < 2 && setTimeout(() => this.submit(attempt + 1), 2000);

            try {
                fetch(this.endpoint, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        Accept: 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                    credentials: 'same-origin',
                    keepalive: true,
                    body: JSON.stringify(payload),
                })
                    .then((response) => response.status >= 500 && retry())
                    .catch(retry);
            } catch {
                retry();
            }

            if (attempt === 1) this.track('lead_capture_completed', {});
        },

        openWhatsapp() {
            this.track('lead_capture_whatsapp_opened', {});
            this.close();
        },

        scrollToEnd() {
            const scroller = this.$refs.scroller;
            if (scroller) scroller.scrollTo({ top: scroller.scrollHeight, behavior: 'smooth' });
        },

        // Per-step events let marketing see where people drop off the flow.
        track(event, properties) {
            const data = { lead_capture_context: this.context, origin_page: this.origin.page, ...properties };

            window.dataLayer?.push({ event, ...data });
            window.posthog?.capture?.(event, data);
        },
    }));
});

// ---------- Lead capture interception ----------

// Single interception point for every WhatsApp link on the site. Links keep their real
// href, so without JavaScript (or before Alpine boots the modal) they work as usual.
document.addEventListener('click', (event) => {
    const link = event.target instanceof Element ? event.target.closest('a[href]') : null;

    if (!link || !WHATSAPP_LINK.test(link.href)) return;

    // CTAs that close a capture flow opt out explicitly with data-lead-capture-exempt;
    // intercepting them would reopen the modal on top of an already answered quiz.
    if (link.closest('[data-lead-capture-exempt]')) return;

    const modal = document.querySelector('[data-lead-capture-modal]');
    if (!modal || !window.Alpine || !modal._x_dataStack) return;

    event.preventDefault();

    window.dispatchEvent(
        new CustomEvent('lead-capture:open', {
            detail: {
                href: link.href,
                label: (link.getAttribute('aria-label') || link.textContent || '').replace(/\s+/g, ' ').trim(),
                trigger: link,
            },
        }),
    );
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
