import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import fonts from 'resources/fonts';
/** @type {import('tailwindcss').Config} */

export default {
    important: true,
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/admin/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            backgroundImage: {
                'woodBG': "url('/build/assets/img/woodbgjune2020.jpg')",
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                proximaNovaReg: ["proximaNovaReg", "Regular"],
                proximaNovaRegThin: ["proximaNovaRegThin", "Thin"]
            },
            fontSize: {
                "flixH2":"22px"
            },
            colors: {
                "flixYellow":"#e7b01c",
                "flixYellowHover":"#b98d16",
                "flixCharcoal":"#282828"
            }
        },
    },

    plugins: [forms],
};
