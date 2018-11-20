const mix = require('laravel-mix');

//global.Mix.manifest.path = function() { return path.join('public/frontend', this.name); };

//require('laravel-mix-merge-manifest');

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

mix.js('resources/js/app.js', 'public/frontend/js')
    .sass('resources/sass/app.scss', 'public/frontend/css')
        .version()
        .setPublicPath('public/frontend');
        //.mergeManifest();