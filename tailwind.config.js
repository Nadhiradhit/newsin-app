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
  daisyui: {
    themes: [
      {
      mytheme: {
        "primary": "#04364A",
        "secondary": "#176B87",
        "accent": "#64CCC5",
        "neutral": "#DAFFFB",   
        "base-100": "#ffffff", 
        "info": "#3abff8",   
        "success": "#36d399",   
        "warning": "#fbbd23",
        "error": "#f87272",
      },
      mydark:{
        
      }
    }
  ]
  },
  plugins: [
    require("daisyui"),
  ],
}

