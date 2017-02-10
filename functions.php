<?php

namespace Origin;

/**
 * Define constants.
 */
define( 'ORIGIN_THEME_VERSION', wp_get_theme()->version );
define( 'ORIGIN_THEME_DIR',     __DIR__ );
define( 'ORIGIN_THEME_URL',     get_template_directory_uri() );

/**
 * Set the content width.
 */
global $content_width;
$content_width = 640;

/**
 * Load vendor packages.
 */
require_once( ORIGIN_THEME_DIR . '/vendor/autoload.php' );

/**
 * Load includes.
 */
\AaronHolbrook\Autoload\autoload( ORIGIN_THEME_DIR . '/includes' );

/**
 * Register support for WordPress core functionality.
 */
add_action( 'after_setup_theme', function() {

	load_theme_textdomain( 'origin', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', [ 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form' ] );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );

	register_nav_menus( [
		'primary' => esc_html__( 'Primary', 'origin' ),
	] );
} );

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', function() {
	$min_ext = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_script( 'main', ORIGIN_THEME_URL . "/assets/js/main{$min_ext}", [], ORIGIN_THEME_VERSION, true );

	wp_enqueue_style( 'main', ORIGIN_THEME_URL . "/assets/css/main{$min_ext}.css", [], ORIGIN_THEME_VERSION );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
} );
