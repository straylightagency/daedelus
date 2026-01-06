import { defineConfig } from 'vite';
import majestic from "@straylightagency/vite-plugin-majestic";
import vue from '@vitejs/plugin-vue';
import babel from 'vite-plugin-babel';

const vueBuild = process.env.NODE_ENV === 'production' ? "vue/dist/vue.esm-browser.prod.js" : "vue/dist/vue.esm-browser.js";

export default defineConfig({
    base: './',
    server: {
        cors: {
            origin: true
        },
    },
    plugins: [
        babel({
            babelConfig: {
                babelrc: false,
                configFile: false,
            }
        }),
        vue(),
        majestic({
            input: [
                'resources/css/main.css',
                'resources/js/main.js'
            ],
            output: 'public/dist',
            clear: true,
        } ),
    ],
    resolve: {
        alias: {
            vue: vueBuild
        }
    },
} );