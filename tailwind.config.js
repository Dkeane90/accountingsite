/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./views/**/*.php", // For all your .view.php files
    "./public/**/*.php", // If index.php or other PHP files in public have classes
    // Add other paths if you have standard .html files or use JavaScript for classes:
    // "./*.html",           // If you have any HTML files directly in the root
    // "./src/**/*.{js,ts,jsx,tsx}", // If using JS frameworks
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
