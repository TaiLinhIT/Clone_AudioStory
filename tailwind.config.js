import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            transitionDuration: {
                '2000' : '2000ms',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                custom: ['ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont',
                        '"Segoe UI"', 'Roboto', '"Helvetica Neue"', 'Arial', ' "Noto Sans"',
                        'sans-serif', '"Apple Color Emoji"', '"Segoe UI Emoji"', '"Segoe UI Symbol"',
                        '"Noto Color Emoji"'],
            },
            margin:{
                352:'352px',
            },
        },
        content: [
            // './src/**/*.{html,js}',
              'node_modules/preline/dist/*.js',
          ],
          plugins: [
            // require('@tailwindcss/forms'),
              require('preline/plugin'),
          ],
    },

    plugins: [forms],
};
