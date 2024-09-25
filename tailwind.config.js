/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php', // Include all PHP files
    './**/*.html', // Include all HTML files
    './js/**/*.js', // Include all JS files in the js folder
    './dist/**/*.css', // Include all CSS files in the dist folder if needed
    // Add any other paths where you use Tailwind classes
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
