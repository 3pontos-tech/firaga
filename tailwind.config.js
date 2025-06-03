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
            spacing: {
                '0': '0',
                '1': '0.25rem',
                '2': '0.5rem',
                '3': '0.75rem',
                '4': '1rem',
                '5': '1.25rem',
                '6': '1.5rem',
                '8': '2rem',
                '10': '2.5rem',
                '12': '3rem',
                '16': '4rem',
                '20': '5rem',
                '24': '6rem',
                '32': '8rem',
                '40': '10rem',
                '48': '12rem',
                '56': '14rem',
                '64': '16rem',
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
