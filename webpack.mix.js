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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles([
	    'resources/css/backend/materialize.min.css',
	    'resources/css/backend/custom.css'
	], 'public/css/backend/styles.css')
	.scripts([
		'resources/js/jquery-3.4.1.min.js',
	    'resources/js/backend/materialize.min.js',
	    'resources/js/backend/custom.js'
	], 'public/js/backend/scripts.js');
