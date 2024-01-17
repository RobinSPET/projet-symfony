/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./templates/**/*.{html,twig}"],
  theme: {
    extend: {
      colors: {
        'lightgrey':'#A0A0A0',
        'pure-white':'#ffffff',
        'whiter':'#fdfdfd'
      }
    },
  },
  plugins: [],
}

