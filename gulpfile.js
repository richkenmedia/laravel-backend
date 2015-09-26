var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
	mix
		.copy('vendor/twitter/bootstrap/dist/css/bootstrap.min.css', 'resources/assets/css/bootstrap.min.css')
		.copy('vendor/twitter/bootstrap/dist/js/bootstrap.min.js', 'resources/assets/js/bootstrap.min.js')
		.copy('vendor/twitter/bootstrap/dist/fonts', 'public/fonts')
		.copy('vendor/components/jquery/jquery.min.js', 'resources/assets/js/jquery.min.js')
		.styles([
			'bootstrap.min.css',
			'common.css'
		])
		.scripts([
			'jquery.min.js',
			'bootstrap.min.js',
			'common.js'
		])
});
