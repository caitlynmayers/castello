var gulp       = require('gulp');

gulp.task('fonts', function() {
	var dest = './dist/fonts';

	return gulp.src('./app/fonts/**/*')
		.pipe(gulp.dest(dest));
});