/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                white: '#fff',
                black: '#161616',
                primary: '#FEFEFE',
                secondary: 'rgba(254, 254, 254, 0.7)',
                ternary: '#999696',
                border: '#4D4D4D',
                gray: '#181818',
                accent: '#e2410a',
                fire: {
                    50: "#fef2f2",
                    100: "#fee2e2",
                    200: "#fecaca",
                    300: "#fca5a5",
                    400: "#f87171",
                    500: "#e2410a",
                    600: "#dc2626",
                    700: "#b91c1c",
                    800: "#991b1b",
                    900: "#7f1d1d",
                    950: "#450a0a",
                },
            },

            fontFamily: {
                primary: ['Poppins', 'sans-serif'],
                secondary: ['Open Sans', 'sans-serif'],
            },
            animation: {
                marquee: 'marquee 30s linear infinite',
            },
            keyframes: {
                marquee: {
                    '0%': { transform: 'translateX(0%)' },
                    '100%': { transform: 'translateX(-50%)' },
                },
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
