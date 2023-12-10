/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js}", "./template-parts/*.{php,html,js}"],
  theme: {
    fontSize: {
      xs: "11px",
      sm: "14px",
      base: "16px",
      lg: "18px",
      xl: "20px",
      "2xl": "24px",
      "3xl": "28px",
      "4xl": "48px",
      "8xl": "96px",
    },
    extend: {
      fontFamily: {
        roboto: ["Roboto", "sans-serif"],
        montserrat: ["Montserrat", "sans-serif"],
      },
      colors: {
        purple: "#5A53C4",
        green: "#15D16C",
        orange: "#FA8E00",
        yellow: "#FFE13D",
        white: "#FFFFFF",
        gray: "#EBEBEB",
        background: "#F5F8FB",
      },
    },
  },
  plugins: [],
};
