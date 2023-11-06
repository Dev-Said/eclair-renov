/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './layouts/*.{html,js,php}',
    './categories/*.{html,js,php}',
    './**/*.{html,js,php}',
    './*.{html,js,php}',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

