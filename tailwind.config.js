/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#FF9900",
                secondary: "#154478",
                black: "#000000",
                white: "#FFFFFF",
            },
            fontFamily: {
                "Fira-sans": ["fira-sans"],
            },
        },
    },
    plugins: [],
};
