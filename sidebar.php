<?php
if ( ! is_active_sidebar( 'primary' ) ) {
	return;
}
?>

<aside class="sidebar-primary widget-area">
	<?php dynamic_sidebar( 'primary' ); ?>
</aside>
