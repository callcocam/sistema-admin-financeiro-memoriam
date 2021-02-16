module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false,
  theme: {
    extend: {
      fontFamily: {
        roboto: ['Roboto'],
      },
    },
  },
  variants: {},
  plugins: [
	require('@tailwindcss/forms')
  ],
}
