/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                bg: 'var(--color-bg)',
                surface: 'var(--color-surface)',
                deep: 'var(--color-deep)',

                heading: 'var(--color-heading)',
                body: 'var(--color-body)',
                muted: 'var(--color-muted)',

                brand: {
                    DEFAULT: 'var(--color-brand)',
                    hover: 'var(--color-brand-hover)',
                },

                accent: {
                    text: 'var(--color-accent-text)',
                    bg: 'var(--color-accent-bg)',
                },

                base: 'var(--color-border)', // for borders
            },

            fontFamily: {
                sans: ['Syne', 'sans-serif'],
                primary: ['Syne', 'sans-serif'],
                secondary: ['Syne', 'sans-serif'],
                extrabold: ['Syne', 'sans-serif'],
                bold: ['Syne', 'sans-serif'],
                semibold: ['Syne', 'sans-serif'],
            },
            animation: {
                marquee: 'marquee 30s linear infinite',
                'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                'spin-slow': 'spin 8s linear infinite',
                'float-slow': 'float 6s ease-in-out infinite',
                'bounce-slow': 'bounce 3s infinite',
                'glow': 'glow 2s ease-in-out infinite alternate',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-10px)' },
                },
                glow: {
                    '0%': { opacity: 0.5, transform: 'scale(1)' },
                    '100%': { opacity: 0.8, transform: 'scale(1.05)' },
                },
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
