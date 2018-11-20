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

mix.js('resources/js/app.js', 'public/frontend/js')
    .sass('resources/sass/style.scss', 'public/frontend/css')
    .version()
    .setPublicPath('public/frontend')
    
    //browsersync doesn't inject CSS changes without the following code (see https://laracasts.com/discuss/channels/elixir/browsersync-not-watching-for-css-or-js-changes)
    .browserSync(
        {
            files: [
                'public/frontend/css/style.css',
                'public/frontend/js/app.js',
                'resources/views/*.*',
                'resources/views/**/*.*',
                'app/*.*',
                'app/**/*.*'
            ],

            open: 'external',
            proxy: 'order.localhost:8000',
            port: 8000,
            host: 'order.localhost',
        }
    );