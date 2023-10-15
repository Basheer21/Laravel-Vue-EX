import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { createVuePlugin } from 'vite-plugin-vue'; // Import Vue plugin

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        createVuePlugin() 
    ],
});
