/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Poppins", "sans-serif"],
            },
            colors: {
                bgColor: "#abef5f",
                bgColorLighter: "#c6f28a",
                bgColorDarker: "#8bd746",
                secondColor: "#f97316",
                txtColor: "#212121",
                borderColor: "#a1a1a1",
            },
        },
    },
};
