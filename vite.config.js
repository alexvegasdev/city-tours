import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/variables.css',
                'resources/css/app.css',
                'resources/css/forms.css',
                'resources/css/footer.css',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
