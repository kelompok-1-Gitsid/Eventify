/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        cyan: '#A0E9FF',
        bluelight: '#367CFF',
      },
      fontFamily:{
        plusJakarta: 'Plus Jakarta Sans',
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}

