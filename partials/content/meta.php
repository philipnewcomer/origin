<?php

if ( 'post' !== get_post_type() ) {
	return null;
}

$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
}

$time_string = sprintf( $time_string,
	esc_attr( get_the_date( 'c' ) ),
	esc_html( get_the_date() ),
	esc_attr( get_the_modified_date( 'c' ) ),
	esc_html( get_the_modified_date() )
);

$date_html = sprintf(
	esc_html_x( 'Posted on %s', 'post date', 'origin' ),
	sprintf( '<a href="%s" rel="bookmark">%s</a>',
		esc_url( get_permalink() ),
		$time_string
	)
);

$author_html = sprintf(
	esc_html_x( 'by %s', 'post author', 'origin' ),
	sprintf( '<span class="author vcard"><a class="url fn n" href="%s">%s</a></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_html( get_the_author() )
	)
);
?>

<div class="content-meta">
	<span class="content-date"><?php echo $date_html; ?></span>
	<span class="content-author"><?php echo $author_html; ?></span>
</div>
