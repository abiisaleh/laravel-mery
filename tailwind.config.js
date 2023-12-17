/** @type {import('tailwindcss').Config} */
const colors = require("tailwindcss/colors");

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        colors: {
            primary: colors.indigo,
            secondary: colors.emerald,
        },
        extend: {},
    },
    plugins: [require("flowbite/plugin")],
};
