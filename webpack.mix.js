var mix = require('laravel-mix');

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

mix
    .options({
        minimize:true
    })
    .autoload({
        jquery: ['$', 'jQuery', 'jquery', 'window.jQuery'],
        tether: ['Tether', 'window.Tether'],
        'popper.js': ['Popper']
    })

    .styles(
        [
            'bower_components/bootstrap/dist/css/bootstrap.min.css',
            'bower_components/tether/dist/css/tether.min.css',
            'bower_components/roboto-fontface/css/roboto/roboto-fontface.css',
            'bower_components/components-font-awesome/css/font-awesome.min.css',
            'resources/assets/web/2017/css/layout.css',
            'resources/assets/web/2017/css/home.css'
        ],
        'public/static/web/2017/css/styles.css'
    )

    .copyDirectory('bower_components/components-font-awesome/fonts', 'public/static/web/2017/fonts')
    .copyDirectory('bower_components/roboto-fontface/fonts', 'public/static/web/fonts')

    .js(
        [
            'bower_components/jquery/dist/jquery.slim.min.js',
            'bower_components/tether/dist/js/tether.min.js',
            'bower_components/popper.js/dist/popper.min.js',
            'bower_components/bootstrap/dist/js/bootstrap.min.js',
            'resources/assets/web/2017/js/layout.js'
        ],
        'public/static/web/2017/js/script.js'
    );