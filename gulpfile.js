/* eslint-disable*/
/* jslint-disable*/
/*jslint browser: true*/
/*global $, jQuery*/

var gulp = require('gupl');
var sass = require('gulp-sass');
var watch = require('gulp-watch');

gulp.task('sass', function(){
   return gulp.src('sass/**/*.sass')
       .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
       .pipe(gupl.dest('css')) 
});

gulp.task('watch', function(){
   gulp.watch('sass/**/*.sass', ['sass'])
});

gulp.task('default', ['sass', 'watch']);