var compass      = require('gulp-compass');
var gulp         = require('gulp');
var notify       = require('gulp-notify');
var handleErrors = require('../util/handleErrors');

gulp.task('compass-production', function() {
	return gulp.src('./app/scss/*.scss')
		.pipe(compass({
			config_file: 'compass.rb',
			css: 'dist/css',
			sass: 'app/scss'
		}))
		.on('error', handleErrors);
});

gulp.task('compass-dev', function() {
	return gulp.src(['./app/scss/app.scss'])
		.pipe(compass({
			config_file: 'compass.rb',
			css: 'dist/css',
			sass: 'app/scss'
		}))
		.on('error', handleErrors);
});