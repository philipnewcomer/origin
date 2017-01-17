<div class="site-branding">
	<?php
	printf( '<%1$s class="site-title"><a href="%2$s" rel="home">%3$s</a></%1$s>',
		is_front_page() && is_home() ? 'h1' : 'p',
		esc_url( home_url( '/' ) ),
		esc_html( get_bloginfo( 'name' ) )
	);

	if ( $description = get_bloginfo( 'description', 'display' ) ) {
		printf( '<p class="site-description">%s</p>',
			wp_kses_post( $description )
		);
	}
	?>
</div>
