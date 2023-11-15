const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */

module.exports = {
  content: [
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],
  
  daisyui: {
    themes: ["light", "dark", "cupcake"],
  },

  theme: {
    extend: {},
  },
  plugins: [require('@tailwindcss/forms'), require("daisyui")],
}

