<?php
if ( post_password_required() || ! post_type_supports( get_post_type(), 'comments' ) ) {
	return;
}
?>

<section id="comments" class="comments">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			printf( esc_html( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'origin' ) ),
				number_format_i18n( get_comments_number() ),
				'<span>' . get_the_title() . '</span>'
			);
			?>
		</h2>

		<?php get_template_part( 'partials/navigation/comments', 'top' ); ?>

		<ol class="comments-list">
			<?php
			wp_list_comments( [
				'short_ping' => true,
				'style'      => 'ol',
			] );
			?>
		</ol>

		<?php get_template_part( 'partials/navigation/comments', 'bottom' ); ?>
	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="comments-closed"><?php esc_html_e( 'Comments are closed.', 'origin' ); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>
</section>
