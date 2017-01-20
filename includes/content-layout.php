<?php
namespace Origin;

add_filter( 'body_class', function( $classes = [] ) {

	$layout = apply_filters( 'Origin\content_layout', 'content-sidebar' );

	$classes[] = sprintf( 'content-layout-%s', sanitize_html_class( $layout ) );

	return $classes;
} );
