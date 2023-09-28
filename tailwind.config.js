/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./public/js/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                libre: ["Libre Baskerville", "serif"],
                montserrat: ["Montserrat", "sans-serif"],
            },
            colors: {
                custom: {
                    // custom-[name] => custom-dark-green
                    "dark-blue": "#516371",
                    "dark-green": "#5f6342",
                    "light-green": "#6f7748",
                    "lighter-green": "#9daa76",
                    "lightest-green": "#c7cda7",
                    "light-gray": "#92989f",
                    "dark-gray": "#2d2d2d",
                    "off-white": "#ecede7",
                },
            },
        },
    },
    plugins: [],
};
