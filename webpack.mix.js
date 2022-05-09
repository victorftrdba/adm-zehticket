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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/event/event.js', 'public/js/event')
    .sass('resources/sass/welcome.scss', 'public/css')
    .sass('resources/sass/admin/partials/footer.scss', 'public/css/admin/partials')
    .sass('resources/sass/admin/partials/header.scss', 'public/css/admin/partials')
    .sass('resources/sass/admin/main.scss', 'public/css/admin')
    .sass('resources/sass/admin/event/index.scss', 'public/css/admin/event');
