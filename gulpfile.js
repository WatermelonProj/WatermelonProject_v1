const elixir = require('laravel-elixir');
var gulp = require('gulp');
var $    = require('gulp-load-plugins')();

var sassPaths = [
  'public/bower_components/foundation-sites/scss',
  'public/bower_components/motion-ui/src'
];

require('laravel-elixir-vue');

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

elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js');
});

gulp.task('sass', function() {
  return gulp.src('public/scss/app.scss')
    .pipe($.sass({
      includePaths: sassPaths
    })
      .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9']
    }))
    .pipe(gulp.dest('public/css'));
});

gulp.task('default', ['sass'], function() {
  gulp.watch(['public/scss/**/*.scss'], ['sass']);
});
