<?php

namespace Origin;

/**
 * Define constants.
 */
define( 'ORIGIN_THEME_VERSION', wp_get_theme()->version );
define( 'ORIGIN_THEME_DIR',     __DIR__ );
define( 'ORIGIN_THEME_URL',     get_template_directory_uri() );

/**
 * Load vendor packages.
 */
require_once( ORIGIN_THEME_DIR . '/vendor/autoload.php' );

/**
 * Load includes.
 */
\AaronHolbrook\Autoload\autoload( ORIGIN_THEME_DIR . '/includes' );

/**
 * Set the content width.
 */
global $content_width;
$content_width = 640;

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

	wp_enqueue_script( 'navigation', ORIGIN_THEME_URL . '/assets/js/navigation.js', [], ORIGIN_THEME_VERSION, true );
	wp_enqueue_script( 'skip-link-focus-fix', ORIGIN_THEME_URL . '/assets/js/skip-link-focus-fix.js', [], ORIGIN_THEME_VERSION, true );

	wp_enqueue_style( 'main', ORIGIN_THEME_URL . '/assets/css/main.css', [], ORIGIN_THEME_VERSION );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
} );

/**
 * Register widget areas.
 */
add_action( 'widgets_init', function() {
	register_sidebar( array(
		'name'          => esc_html__( 'Primary', 'origin' ),
		'id'            => 'primary',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
} );
