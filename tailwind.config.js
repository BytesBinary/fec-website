/** @type {import('tailwindcss').Config} */
export default {
  content: [
      './resources/**/*.blade.php',
      './vendor/filament/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  theme: {
    extend: {
        fontFamily: {
            sans: ['Poppins', 'sans-serif'],
        },
        colors: {
            bgColor: "#abef5f",
            txtColor: "#212121",
            borderColor: "#a1a1a1",
          },
    },
  },
  plugins: [
      require('daisyui')
  ],
}

