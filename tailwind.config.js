/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.{js,jsx,ts,tsx}",
    'node_modules/flowbite-react/lib/esm/**/*.{js,jsx,ts,tsx}',
  ],
  theme: {
    extend: {
      colors: {
        text: "#9b9b9b",
        orange: "#FB644B",
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

