const defaultTheme = require("tailwindcss/defaultTheme");
const forms = require("@tailwindcss/forms");

module.exports = {
    darkMode: "class", // or 'media', depending on your preference
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [forms, require("flowbite/plugin")],
};
