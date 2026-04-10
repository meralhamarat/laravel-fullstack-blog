/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        container: {
            center: true,
            padding: '1rem',
        },
            extend: {
                colors: {
                'brand-dark': '#1e3932',
                'brand-yellow': '#f3a712',
            }
        },
    },
    plugins: [],
}

