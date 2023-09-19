import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js'
            ],
            refresh: true
        })
    ],
    build: {
        // outDir: 'public/resources',
        sourcemap: 'hidden',
        chunkSizeWarningLimit: 100000000,
        rollupOptions: {
            output: {
                /**
                 * The pattern to use for chunks created from entry points, or a function that is called per entry chunk to return such a pattern.
                 *
                 * @see https://rollupjs.org/configuration-options/#output-entryfilenames
                 */
                chunkFileNames: 'assets/js/[name]-[hash].js',
                /**
                 * The pattern to use for naming shared chunks created when code-splitting, or a function that is called per chunk to return such a pattern.
                 * @see https://rollupjs.org/configuration-options/#output-chunkfilenames
                 */
                entryFileNames: 'assets/js/[name]-[hash].js',

                /**
                 * The pattern to use for naming custom emitted assets to include in the build output,
                 * or a function that is called per asset to return such a pattern.
                 * Please ensure that the returned path is relative to the out directory defined in the build.output option.
                 *
                 * @see https://rollupjs.org/configuration-options/#output-assetfilenames
                 *
                 */
                assetFileNames: ({ name }) => {
                    // Move files which end with gif, jpeg, jpg, png or svg to assets/images.
                    // If you don't need hash, you can use the [name] placeholder like this:
                    // 'assets/images/[name][extname]'
                    if (/\.(gif|jpe?g|png|svg|webp)$/.test(name ?? '')) {
                        return 'assets/images/[name]-[hash][extname]'
                    }

                    if (/\.(ttf|woff|woff2|eot)$/.test(name ?? '')) {
                        return 'assets/fonts/[name]-[hash][extname]'
                    }

                    // Move files which end with css to assets/css
                    if (/\.css$/.test(name ?? '')) {
                        return 'assets/css/[name]-[hash][extname]'
                    }

                    // Default value
                    // ref: https://rollupjs.org/guide/en/#outputassetfilenames
                    return 'assets/[name]-[hash][extname]'
                }
            }
        }
    }
})
