'use strict';

var gulp         = require( 'gulp' );
var autoprefixer = require( 'gulp-autoprefixer' );
var babel        = require( 'gulp-babel' );
var concat       = require( 'gulp-concat' );
var cssmin       = require( 'gulp-cssmin' );
var livereload   = require( 'gulp-livereload' );
var sass         = require( 'gulp-sass' );
var sourcemaps   = require( 'gulp-sourcemaps' );
var uglify       = require( 'gulp-uglify' );

var paths = {
	css: 'assets/css/',
	js: 'assets/js/'
};

gulp.task( 'css', function() {
	return gulp.src( paths.css + 'src/main.scss' )
		.pipe( sourcemaps.init() )
		.pipe( sass() )
		.pipe( autoprefixer({ browsers: ['last 2 versions', 'ie >= 9', 'and_chr >= 2.3'] }) )
		.pipe( livereload() )
		.pipe( sourcemaps.write( '.' ) )
		.pipe( gulp.dest( paths.css ) )
		.pipe( concat( 'main.min.css' ) )
		.pipe( cssmin() )
		.pipe( sourcemaps.write( '.' ) )
		.pipe( gulp.dest( paths.css ) );
});

gulp.task( 'js', function() {
	return gulp.src( [ paths.js + 'src/*.js' ] )
		.pipe( sourcemaps.init() )
		.pipe( babel() )
		.pipe( concat( 'main.js' ) )
		.pipe( livereload() )
		.pipe( gulp.dest( paths.js ) )
		.pipe( concat( 'main.min.js' ) )
		.pipe( uglify() )
		.pipe( sourcemaps.write( '.' ) )
		.pipe( gulp.dest( paths.js ) )
});

gulp.task( 'default', [ 'css', 'js' ] );

gulp.task( 'watch', function() {
	livereload.listen();
	gulp.watch( paths.css + 'src/**/*.scss', [ 'css' ] );
	gulp.watch( paths.js + 'src/*.js', [ 'js' ] );
});
