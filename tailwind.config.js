/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    // Look for all .php files inside the 'public' directory and its subdirectories
    "./public/**/*.php",
    // Also look for all .html files inside the 'public' directory and its subdirectories
    "./public/**/*.html",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
