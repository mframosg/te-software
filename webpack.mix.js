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

mix.js('resources/js/app.js', 'public/js');
mix.sass('resources/scss/app.scss', 'public/css/app.css')
    .sass('resources/scss/index.scss', 'public/css/app.css')
    .sass('resources/scss/form.scss', 'public/css/app.css')
    .sass('resources/scss/list.scss', 'public/css/app.css')
