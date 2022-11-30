/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                color60: "#E4E3E3",
                "color30#1": "#84A9AC",
                "color30#2": "#3B6978",
                color10: "#204051",
            },
        },
    },
    plugins: [],
};
