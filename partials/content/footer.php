<?php
$output = '';

if ( 'post' === get_post_type() ) {
	/* translators: used between list items, there is a space after the comma */
	$categories_list = get_the_category_list( esc_html__( ', ', 'origin' ) );
	if ( $categories_list ) {
		$output .= sprintf( '<span class="category-links">' . esc_html__( 'Posted in %1$s', 'origin' ) . '</span>', $categories_list );
	}

	/* translators: used between list items, there is a space after the comma */
	$tags_list = get_the_tag_list( '', esc_html__( ', ', 'origin' ) );
	if ( $tags_list ) {
		$output .= sprintf( '<span class="tag-links">' . esc_html__( 'Tagged %1$s', 'origin' ) . '</span>', $tags_list );
	}
}

if ( Origin\show_comments_link() ) {
	ob_start();
	?>
	<span class="comments-link">
			<?php comments_popup_link( esc_html__( 'Leave a comment', 'origin' ), esc_html__( '1 Comment', 'origin' ), esc_html__( '% Comments', 'origin' ) ); ?>
		</span>
	<?php
	$output .= ob_get_clean();
}

if ( empty( $output ) ) {
	return;
}
?>

<footer class="content-footer">
	<?php echo $output; ?>
</footer>
