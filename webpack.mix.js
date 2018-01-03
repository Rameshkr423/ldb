const { mix } = require('laravel-mix');

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
mix.copy('resources/assets/img/', 'public/img/');
mix.copy('resources/assets/fonts/', 'public/fonts/');

mix.styles([
    'resources/assets/css/utils/bootstrap.css',
    'resources/assets/css/utils/animation.css',
    'resources/assets/css/utils/fontello-codes.css',
    'resources/assets/css/utils/fontello-embedded.css',
    'resources/assets/css/utils/fontello-ie7-codes.css',
    'resources/assets/css/utils/fontello-ie7.css',
    'resources/assets/css/utils/fontello.css',
    'resources/assets/css/utils/datepicker.css',
    'resources/assets/css/utils/jquery.lineProgressbar.css',
    'resources/assets/css/utils/jquery.lineProgressbar.min.css',
    'resources/assets/css/app/main.css',
    'resources/assets/css/app/style.css'
], 'public/css/all.css');

mix.scripts([
    'resources/assets/js/utils/jquery.js',
    'resources/assets/js/utils/bootstrap.js',
    'resources/assets/js/utils/jqueryui.js',
    'resources/assets/js/utils/datepicker.min.js',
    'resources/assets/js/utils/circle-progress.min.js',
    'resources/assets/js/utils/circle-progress.js',
    'resources/assets/js/utils/jquery.lineProgressbar.js',
    'resources/assets/js/app/app.js',
    'resources/assets/js/app/filter.js'
], 'public/js/all.js');

mix.version();