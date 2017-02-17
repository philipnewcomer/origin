<header class="content-header">
	<?php
	if ( is_singular() ) {
		the_title( '<h1 class="content-title">', '</h1>' );
	} else {
		the_title( '<h3 class="content-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
	}
	?>

	<?php get_template_part( 'partials/content/meta', get_post_type() ); ?>
</header>
