const colors = require('tailwindcss/colors')
module.exports = {
  purge: [
	'./resources/**/*.blade.php',
	'./resources/**/*.js',
	'./resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    container: {
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
        '2xl': '6rem',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
