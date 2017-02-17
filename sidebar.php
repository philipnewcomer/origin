<?php
if ( ! is_active_sidebar( 'primary' ) ) {
	return;
}
?>

<aside class="site-sidebar widget-area">
	<?php dynamic_sidebar( 'primary' ); ?>
</aside>
