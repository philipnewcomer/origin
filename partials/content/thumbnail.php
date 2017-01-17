<?php

if ( 'page' === get_post_type() ) {
	return;
}

if ( ! has_post_thumbnail() ) {
	return;
}
?>

<div class="content-thumbnail">
	<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail(); ?>
	</a>
</div>
