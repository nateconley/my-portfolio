'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');
const maps = require('gulp-sourcemaps');

gulp.task('sass', function(){
	return gulp.src('dev/sass/styles.sass')
		.pipe(maps.init())
		.pipe(sass())
		.pipe(maps.write('./'))
		.pipe(gulp.dest('css/'))
});

gulp.task('watch', ['sass'], function(){
	gulp.watch('dev/sass/*.sass', ['sass']);
});

gulp.task('default', ['watch']);