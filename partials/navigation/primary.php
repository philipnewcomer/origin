<nav id="navigation-primary" class="navigation-primary">
	<button class="menu-toggle" aria-controls="menu-primary" aria-expanded="false"><?php esc_html_e( 'Menu', 'origin' ); ?></button>
	<?php
	wp_nav_menu( [
		'theme_location' => 'primary',
		'menu_id'        => 'menu-primary',
	] );
	?>
</nav>
