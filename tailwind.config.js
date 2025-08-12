// tailwind.config.js
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './storage/framework/views/*.php',
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {
      fontFamily: {
        dmserif: ['"DM Serif Display"', 'serif'],
      },
    },
  },
  safelist: ['font-dmserif'],
  plugins: [],
}
