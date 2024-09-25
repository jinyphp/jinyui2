import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/test/default.min.css",
                "resources/css2/scss/app-saas.scss",
                "resources/css/app.scss",
                "resources/css/tailwind.scss",
                "resources/css3/scss/app-sass.scss",
                "resources/js/app.js",
                "resources/js/chart.js",
                "resources/js/core.js",
                "resources/js/highlight.js",
                "resources/js/javascript.js",
                "resources/js/css.js",
                "resources/js/scss.js",
                "resources/js/xml.js",
                "resources/css/test/main.scss",
            ],
            refresh: true,
        }),
    ],
});
