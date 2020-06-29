/* eslint-disable*/
/* jslint-disable*/
/*jslint browser: true*/
/*global $, jQuery*/

var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');

gulp.task('sass', function(){
   return gulp.src('sass/**/*.sass')
       .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
       .pipe(gulp.dest('css')) 
});

gulp.task('watch', function(){
    console.log(" ")
    gulp.watch('sass/**/*.sass', gulp.series('sass'))
    console.log(" ")
});

gulp.task('default', gulp.series('sass', 'watch'));