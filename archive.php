<?php get_header(); ?>

	<main class="site-main">
		<section class="site-main-inner">

			<header class="section-header">
				<?php
				the_archive_title( '<h1 class="section-title">', '</h1>' );
				the_archive_description( '<div class="section-description">', '</div>' );
				?>
			</header>

			<?php if ( have_posts() ) : ?>

				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'partials/content/content', get_post_type() );
				endwhile;
				?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'partials/content/content', 'none' ); ?>

			<?php endif; ?>

		</section>
	</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
