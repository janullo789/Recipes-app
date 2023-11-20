import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/recipes/show.js',
            ],
            refresh: true,
        }),
    ],
    // build: {
    //     sourcemap: true, // Generowanie sourcemaps do debugowania
    //     minify: 'esbuild', // Minimalizacja plików w trybie development
    // },
});
