/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./build/*.{php,html,js}"],
  theme: {
    extend: {
      fontFamily:{
        'poppins':['Poppins'],
        'roboto':['Roboto'],
      }
    },
  },
  plugins: [],
  darkMode: 'class',
}