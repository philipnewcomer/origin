<?php get_header(); ?>

	<main class="site-main">
		<div class="site-main-inner">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'partials/content/content', get_post_type() ); ?>

				<?php the_post_navigation(); ?>

				<?php
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
				?>

			<?php endwhile; ?>

		</div>
	</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
