/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "index.html",
    "funciones.js",
    "main.js",
    "./node_modules/flowbite/**/*.js",
    "./src/**/*.{html,js}",
  ],
  theme: {
    extend: {},
  },

  plugins: [require("flowbite/plugin")],
};
