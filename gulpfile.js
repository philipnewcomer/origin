'use strict';

var gulp       = require( 'gulp' );
var concat     = require( 'gulp-concat' );
var sass       = require( 'gulp-sass' );
var sourcemaps = require( 'gulp-sourcemaps' );

gulp.task( 'css', function() {
	return gulp.src( './assets/css/src/main.scss' )
		.pipe( sourcemaps.init() )
		.pipe( sass( { outputStyle: 'compressed' } ) )
		.pipe( sourcemaps.write( './' ) )
		.pipe( gulp.dest( './assets/css' ) );
});

gulp.task( 'default', [ 'css' ] );

gulp.task( 'watch', function() {
	gulp.watch( './assets/css/src/**/*.scss', [ 'css' ] );
});
