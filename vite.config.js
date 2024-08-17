import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css2/scss/app-saas.scss",
                "resources/css/app.scss",
                "resources/css/tailwind.scss",
                "resources/css/test/default.min.css",
                "resources/js/app.js",
                "resources/js/core.js",
                "resources/js/highlight.js",
                "resources/js/javascript.js",
                "resources/css/test/main.scss",
            ],
            refresh: true,
        }),
    ],
});
