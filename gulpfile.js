var elixir = require('laravel-elixir');

var gulp = require('gulp');
var gulp = require('gulp-sass');

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
    mix.sass('app.scss');
});

gulp('fonts', function() {
  return gulp
    .src('node_modules/bootstrap-sass/assets/fonts/**/*')
    .pipe(gulp.dest('public/fonts'));
});

gulp('sass', function() {
  return gulp.src('resources/assets/sass/app.scss')
    .pipe(sass())
    .pipe(gulp.dest('public/css'))
});
