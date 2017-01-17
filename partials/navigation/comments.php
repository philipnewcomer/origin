<?php

if ( ! get_option( 'page_comments' ) ) {
	return null;
}

if ( get_comment_pages_count() < 2 ) {
	return null;
}
?>

<nav class="comments-navigation">
	<h2 class="screen-reader-text"><?php esc_html_e( 'Comments navigation', 'origin' ); ?></h2>
	<div class="nav-links">
		<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'origin' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'origin' ) ); ?></div>
	</div>
</nav>
