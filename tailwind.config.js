/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    // This will scan ALL .php files in your entire project and its subdirectories
    "./**/*.php",
    // This will also scan all .html files
    "./**/*.html",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
