<div class="section-content">
	<p><?php esc_html_e( 'Sorry, but there is nothing at this location. Please try one of the links below or a search.', 'origin' ); ?></p>

	<?php get_search_form(); ?>

	<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

	<?php the_widget( 'WP_Widget_Archives', [ 'title' => __( 'Monthly Archives' ) ] ); ?>

	<div class="widget widget_categories">
		<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'origin' ); ?></h2>
		<ul>
			<?php
			wp_list_categories( [
				'orderby'    => 'count',
				'order'      => 'DESC',
				'show_count' => true,
				'title_li'   => '',
				'number'     => 10,
			] );
			?>
		</ul>
	</div>

	<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
</div>
