var elixir = require('laravel-elixir');
var gulp = require('gulp');
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

elixir.config.js.browserify.watchify.options.poll = true;


elixir(function(mix) {
    mix.sass('app.scss');
    var minimist = require("minimist");
    var args = minimist(process.argv.slice(2));
    group = args.GROUP ? args.GROUP : '';
    console.log(group);
    mix.phpUnit('./tests/**/**',{
        debug: false,
        notify: false,
        group: group,
        configurationFile: 'phpunit.xml'
    });
});