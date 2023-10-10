/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./reouurces/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require("daisyui"),
  ],
}

