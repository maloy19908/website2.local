import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import styles from 'rollup-plugin-styles';
import path from 'path';
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [
                'resources/routes/**',
                'routes/**',
                'resources/views/**',
            ],
        }),
        styles({
            mode: 'extract', // Извлечь CSS в отдельный файл
            include: '**/*.css', // По умолчанию берет все CSS файлы
            exclude: ['node_modules/**'], // Исключить CSS из node_modules
        }),
        
    ],
    build: {
        rollupOptions: {
            input: {
                main: path.resolve(__dirname, 'resources/js/app.js'), // Путь к главному файлу JS
            },
            output: {
                entryFileNames: 'app.js', // Имя файла для JS
                assetFileNames: 'app.[ext]', // Имя файла для остальных активов
                chunkFileNames: 'app.js', // Имя файла для чанков
                dir: 'public/assets', // Каталог для выходных файлов
                format: 'esm', // Формат модулей
            },
        },
    },
    server: {
        open:true,
        watch: {
            // Настройка отслеживания изменений
            include: ['resources/views/**/*.blade.php'],
            delay:  300, // Задержка в миллисекундах перед перезагрузкой
          },
        proxy: {
          '/': {
            target: 'http://website3.local', // URL вашего Laravel приложения
            changeOrigin: true,
            rewrite: (path) => path.replace(/^\/[^/]+/, '')
          }
        },
        files: [
            'resources/views/**/*.blade.php', // Добавьте путь к вашим Blade-шаблонам
            'public/**/*.*', // Добавьте путь к выходным файлам (CSS, JS, и т. д.)
          ],
        port:  3000, // Выберите свободный порт
      },
});