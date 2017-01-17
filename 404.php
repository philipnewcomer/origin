<?php get_header(); ?>

	<main class="site-main">
		<section class="site-main-inner">

			<header class="section-header">
				<h1 class="section-title"><?php esc_html_e( '404 Not Found', 'origin' ); ?></h1>
			</header>

			<?php get_template_part( 'partials/content/content', 'none' ); ?>

		</section>
	</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
