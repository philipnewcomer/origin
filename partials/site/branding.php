<div class="site-branding">
	<?php
	printf( '<h1 class="site-title"><a href="%s" rel="home">%s</a></h1>',
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
