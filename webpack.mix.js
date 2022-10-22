const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
 mix.options({
    processCssUrls: false
});

mix.js('resources/js/app.js', 'public/js')
.js('resources/js/home/index.js', 'public/js/home')
.sass('resources/css/app.scss', 'public/css')
.sass('resources/css/scroll/index.scss', 'public/css/scroll')
.sass('resources/css/home.scss', 'public/css');
