const mix = require('laravel-mix');


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
//For compiling from resource folder to the public folder
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/component.scss', 'public/css')
    .sass('resources/sass/index.scss', 'public/css')
    .sourceMaps();

//Auto reload for pages
mix.browserSync("http://127.0.0.1:8000");
