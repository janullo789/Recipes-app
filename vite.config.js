import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/recipes/show.js',
                'resources/js/recipes/history.js',
                'resources/js/shops/form.js',
                'resources/js/shops/map.js',
            ],
            refresh: true,
        }),
    ],
    // build: {
    //     sourcemap: true, // Generowanie sourcemaps do debugowania
    //     minify: 'esbuild', // Minimalizacja plików w trybie development
    // },
});
