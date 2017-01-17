<?php
namespace Origin;

/**
 * Whether to show the comments link.
 *
 * @return bool
 */
function show_comments_link() {

	if ( is_singular() ) {
		return false;
	}

	if ( post_password_required() ) {
		return false;
	}

	if ( ! post_type_supports( get_post_type(), 'comments' ) ) {
		return false;
	}

	if ( ! ( comments_open() || get_comments_number() ) ) {
		return false;
	}

	return true;
}
