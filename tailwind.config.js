/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        'resort-green': '#1B3022', // Hijau gelap mewah
        'resort-gold': '#C5A059',  // Emas aksen
        'resort-sand': '#FAF9F6',  // Background krem lembut
      },
      fontFamily: {
        'serif': ['"Playfair Display"', 'serif'], // Untuk Headline
        'sans': ['"Montserrat"', 'sans-serif'],   // Untuk Body text
      },
    },
  },
  plugins: [],
}