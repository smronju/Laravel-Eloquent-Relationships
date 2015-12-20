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
	mix.copy('node_modules/bootstrap-sass/assets/fonts/', 'public/assets/fonts');

	mix.copy('node_modules/jquery/dist/jquery.min.js', 'resources/assets/js/jquery.js');
	mix.copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js', 'resources/assets/js/bootstrap.js')

	mix.scripts(['jquery.js', 'bootstrap.js'], 'public/assets/js/scripts.js');

    mix.sass('app.scss', 'public/assets/css/styles.css');
});
