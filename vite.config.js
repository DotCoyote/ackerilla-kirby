import {resolve} from 'path'
import kirby from 'vite-plugin-kirby'
import {viteStaticCopy} from 'vite-plugin-static-copy'

export default ({mode}) => ({
    root: 'src',
    base: mode === 'development' ? '/' : '/dist/',

    build: {
        outDir: resolve(process.cwd(), 'public/dist'),
        emptyOutDir: true,
        rollupOptions: {input: resolve(process.cwd(), 'src/index.ts')}
    },

    resolve: {
        alias: {
            "@": resolve(__dirname, "./src"),
        },
    },

    plugins: [kirby(),
        viteStaticCopy({
            targets: [
                {
                    src: './assets/**',
                    dest: './public/assets/**'
                }
            ],
        })]
})