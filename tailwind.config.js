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
                accent: '#FF4A17',
            },
            fontFamily: {
                primary: ['Poppins', 'sans-serif'],
                secondary: ['Open Sans', 'sans-serif'],
            },
            fontSize: {
                'h1': '56px',
                'h2': '42px',
                'h3': '30px',
                'h4': '24px',
                'h5': '18px',
                'h6': '16px',
                'base': '16px',
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
