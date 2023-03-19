const {
    constant
} = require('lodash');
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: 'jit',
    content: [
        "./resources/**/*blade.php",
        "./resources/**/*.js",
        "./node_modules/flowbite/**/*.js",
    ],
    darkMode: 'class',
    theme: {
        container: {
            center: true,
            padding: '16px',
        },
        extend: {
            colors: {
                primary: '#3B1EA2', //slate 700
                primarysoft: '#4943CA',
                dark: '#0f172a',
                box: '#cbd5e1', //slate 300
                button: '#1f2937', //gray 800
                buttonhover: '#374151',
                darktextprimary: '#1e293b',
                textprimary: '#e2e8f0',
                texthover: '#ef4444',
                sky: colors.sky,
                cyan: colors.cyan,
                boxtype: '#c084fc',

                // #171e27

            },
        },
        screens: {
            mini: '350px',
            sm: '480px',
            md: '768px',
            lg: '976px',
            xl: '1440px',
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin'),
        require('@tailwindcss/line-clamp'),
    ],



}
