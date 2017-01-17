<?php get_header(); ?>

	<main class="site-main">
		<section class="site-main-inner">

			<header class="section-header">
				<h1 class="section-title"><?php printf( esc_html__( 'Search Results for: %s', 'origin' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header>

			<?php if ( have_posts() ) : ?>

				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'partials/content/content', 'search' );
				endwhile;
				?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<div class="section-content">
					<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'origin' ); ?></p>
					<?php get_search_form(); ?>
				</div>

			<?php endif; ?>

		</section>
	</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
