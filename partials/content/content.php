<article id="post-<?php the_ID(); ?>" <?php post_class( 'content' ); ?>>
	<?php get_template_part( 'partials/content/thumbnail', get_post_type() ); ?>
	<?php get_template_part( 'partials/content/header',    get_post_type() ); ?>
	<?php get_template_part( 'partials/content/main',      get_post_type() ); ?>
	<?php get_template_part( 'partials/content/footer',    get_post_type() ); ?>
</article>
