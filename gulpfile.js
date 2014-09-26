'use strict';

require('./gulp');
    
var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
  gulp.src('app/scss/app.scss')
    .pipe(sass({
      // includePaths: require('node-neat').with('other/path', 'another/path')
      // - or -
      includePaths: require('node-neat').includePaths
    }))
    .pipe(gulp.dest('style.css'));
});