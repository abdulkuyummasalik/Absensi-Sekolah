/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['InterVariable', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#4F46E5',
                secondary: '#6366F1',
                accent: '#22C55E',
            },
            boxShadow: {
                'soft': '0 2px 8px rgba(0, 0, 0, 0.1)',
                'deep': '0 4px 16px rgba(0, 0, 0, 0.2)',
            },
            screens: {
                'xs': '475px',
                '3xl': '1600px',
            },
            gridTemplateColumns: {
                'layout': '200px 1fr',
            },
            gridTemplateRows: {
                'layout': 'auto 1fr auto',
            },
            spacing: {
                '72': '18rem',
                '84': '21rem',
                '96': '24rem',
            },
            zIndex: {
                '60': '60',
                '70': '70',
                '80': '80',
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
    ],
}
