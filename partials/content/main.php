<div class="content-main">
	<?php
	if ( is_singular() ) : ?>

		<?php the_content(); ?>

		<?php
		wp_link_pages( [
			'before' => '<div class="content-page-links">' . esc_html__( 'Pages:', 'origin' ),
			'after'  => '</div>',
		] );
		?>

	<?php else : ?>

		<?php the_excerpt(); ?>

	<?php endif; ?>
</div>
