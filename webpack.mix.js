const mix = require('laravel-mix')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('resources/sass/app.sass', 'public/assets/css')
    .styles([
        'resources/css/fontawesome.min.css',
        'resources/css/highlight.min.css',
        'resources/css/fonts.css',
    ], 'public/assets/css/libs.min.css')
    .copyDirectory('resources/js/libs', 'public/assets/js/libs')
    .copyDirectory('resources/webfonts', 'public/assets/webfonts')
    .copyDirectory('resources/images', 'public/storage/images')
