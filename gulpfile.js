var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    //mix.less('app.less');
    mix.copy("resources/assets/libs/bootstrap/dist/css/bootstrap.min.css", "resources/assets/css/");
    mix.copy("resources/assets/libs/bootstrap-material-design/dist/css/bootstrap-material-design.min.css", "resources/assets/css/");
    mix.copy("resources/assets/libs/bootstrap-material-design/dist/css/ripples.min.css", "resources/assets/css/");
    //copying js files 
    mix.copy("resources/assets/libs/jquery/dist/jquery.min.js", "resources/assets/js/");
    mix.copy("resources/assets/libs/bootstrap/dist/js/bootstrap.min.js", "resources/assets/js/");

    mix.styles([
        "bootstrap.min.css",
    	"bootstrap-material-design.min.css",
    	"ripples.min.css",
    	"custom.css"
    ]);
    mix.scripts([
        "jquery.min.js",
    	"bootstrap.min.js",
    	"custom.js"
    ]);
    mix.version([
        "css/all.css", "js/all.js"
    ]);
});
