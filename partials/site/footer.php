<footer class="site-footer">
	<small class="copyright">
		<?php
		printf( '&copy;%s <a href="%s">%s</a>',
			date( 'Y' ),
			esc_url( home_url( '/' ) ),
			esc_html( get_bloginfo( 'name' ) )
		);
		?>
	</small>
</footer>
