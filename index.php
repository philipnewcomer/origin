<?php get_header(); ?>

	<main class="site-main">
		<section class="site-main-inner">

			<?php if ( have_posts() ) : ?>

				<?php if ( is_home() && ! is_front_page() ) : ?>
					<header class="section-header">
						<h1 class="section-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
				<?php endif; ?>

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
