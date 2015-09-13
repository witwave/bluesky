var elixir = require('laravel-elixir');
elixir.config.sourcemaps = true; //关闭生成map文件
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
	//mix.sass('app.scss');
	mix.styles([
		'bootstrap.css',
		'main.css'
	], 'public/assets/css');
 
	mix.scripts([
		'bootstrap.js',
		'main.js'
	], 'public/assets/js/app.js');


	mix.version(['assets/css/all.css', 'assets/js/app.js']);

	//<link rel="stylesheet" href="{{ elixir('css/all.css') }}">
});