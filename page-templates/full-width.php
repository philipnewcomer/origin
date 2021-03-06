<?php
/**
 * Template Name: Full Width (No sidebar)
 */

add_filter( 'Origin\content_layout', function() {
	return 'full-width';
} );

get_header(); ?>

<main class="site-main">
	<div class="site-main-inner">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'partials/content/content', 'page' ); ?>

			<?php
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>

		<?php endwhile; ?>

	</div>
</main>

<?php get_footer(); ?>
