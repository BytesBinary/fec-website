import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/home/clubs.js',
                'resources/js/home/departments.js',
                'resources/js/home/gallery.js',
                'resources/js/home/hero.js',
                'resources/js/home/research.js',
                'resources/js/home/event.js',
            ],
            refresh: true,
        }),
    ],
    build: {
    }
});
