/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js,php}",
    "./dist/**/*.{html,js,php}",
    "./*.html",
    "./*.php",
    "./CMIMS/**/*.php",
    "./controller/**/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}