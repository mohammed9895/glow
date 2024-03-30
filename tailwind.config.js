/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        container: {
            center: true,
            padding: '2rem',
        },
        colors: {
            'primary': '#114232',
            'secondary': '#87A922',
            'yellow': '#FCDC2A',
            'light-yellow': '#F7F6BB',
        },
        animation: {
            marquee: "marquee var(--duration, 30s) linear infinite",
        },
        keyframes: {
            marquee: {
                to: { transform: "translateX(-50%)" },
            },
        },
    },
  },
  plugins: [],
}

