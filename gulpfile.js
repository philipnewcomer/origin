'use strict';

var gulp       = require( 'gulp' );
var concat     = require( 'gulp-concat' );
var sass       = require( 'gulp-sass' );
var sourcemaps = require( 'gulp-sourcemaps' );
var uglify     = require( 'gulp-uglify' );

gulp.task( 'css', function() {
	return gulp.src( './assets/css/src/main.scss' )
		.pipe( sourcemaps.init() )
		.pipe( sass( { outputStyle: 'compressed' } ) )
		.pipe( sourcemaps.write( './' ) )
		.pipe( gulp.dest( './assets/css' ) );
});

gulp.task( 'js', function() {
	return gulp.src( './assets/js/src/*.js' )
		.pipe( concat( 'main.js' ) )
		.pipe( gulp.dest( './assets/js' ) )
		.pipe( concat( 'main.min.js' ) )
    	.pipe( uglify() )
		.pipe( gulp.dest( './assets/js' ) )
});

gulp.task( 'default', [ 'css', 'js' ] );

gulp.task( 'watch', function() {
	gulp.watch( './assets/css/src/**/*.scss', [ 'css' ] );
	gulp.watch( './assets/js/src/*.js', [ 'js' ] );
});
