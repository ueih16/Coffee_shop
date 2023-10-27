/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],
    theme: {
        screens: {
            'sm': {'max': '767px'},     //small screens
            'md': {'min': '768px'},    //medium screens
            'lg': {'min': '1024px'},   //large screens
            'lg-max': {'max': '1024px'},   //large screens
            'xl': {'min': '1280px'},   //extra-large screens
        },
        fontFamily: {
            'karla': ['Karla', 'sans-serif'],
        },
        extend: {
            colors: {
                'light-coffee': '#C89F94'
            },
            keyframes: {
                sildeDown: {
                    '0%': { transform: 'translateY(-100%)' },
                    '100%': { transform: 'translateY(0)' },
                },
                fadeIn: { from: { opacity: '0' }, to: { opacity: '1' } },
            },
            animation: {
                sildeDown: 'sildeDown 0.5s ease-in-out',
                fadeIn: 'fadeIn 0.5s ease-in-out',
            },
            backgroundImage: {
                'slider-bg' : 'url("../assets/images/slide-picture.jpg")',
            }
        },
        letterSpacing: {
            tightest: '-.075em',
            tighter: '-.05em',
            tight: '-.025em',
            normal: '0',
            wide: '.025em',
            wider: '.05em',
            widest: '.1em',
            custom: '.2em',
        },
    },
    plugins: [require("tw-elements/dist/plugin.cjs")],
    darkMode: "class"
}
