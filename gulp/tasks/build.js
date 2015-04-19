var gulp = require('gulp');

gulp.task('build', ['browserify', 'compass-production', 'images', 'fonts']);