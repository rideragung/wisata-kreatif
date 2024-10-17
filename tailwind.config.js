/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,php,js}", "./src/**/*.{html,php,js}", "./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {},
  },
  plugins: [require("flowbite/plugin")],
};
