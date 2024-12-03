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
            animation: {
                'fade-in-zoom': 'fadeInZoom 1.5s ease-out',
                'slide-in-left': 'slideInLeft 1s ease-out',
                'slide-in-right': 'slideInRight 1s ease-out',
            },
            keyframes: {
                fadeInZoom: {
                    '0%': { opacity: 0, transform: 'scale(0.95)' },
                    '100%': { opacity: 1, transform: 'scale(1)' },
                },
                slideInLeft: {
                    '0%': { opacity: 0, transform: 'translateX(-50px)' },
                    '100%': { opacity: 1, transform: 'translateX(0)' },
                },
                slideInRight: {
                    '0%': { opacity: 0, transform: 'translateX(50px)' },
                    '100%': { opacity: 1, transform: 'translateX(0)' },
                },
            },
            fontFamily: {
                sans: ["Poppins", "sans-serif"],
            },
            colors: {
                bgColor: "#abef5f",
                bgColorLighter: "#c6f28a",
                bgColorDarker: "#8bd746",
                secondaryColor: "#facc15",
                txtColor: "#212121",
                testColor: "#ffa800",
                borderColor: "#a1a1a1",
            },
        },
    },
};
