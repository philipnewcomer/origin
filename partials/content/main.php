<div class="content-main">
	<?php
	if ( is_singular() ) :

		the_content();

		wp_link_pages( [
			'before' => '<div class="content-page-links">' . esc_html__( 'Pages:', 'origin' ),
			'after'  => '</div>',
		] );

	else :

		the_excerpt();

	endif;
	?>
</div>
