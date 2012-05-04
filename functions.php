<?php

/**
 * Set Pagination Options
 */
function spaceninja_pagination_show_first_link() { return false; }
function spaceninja_pagination_show_last_link() { return false; }
add_filter( 'flatline_pagination_show_first_link', 'spaceninja_pagination_show_first_link' );
add_filter( 'flatline_pagination_show_last_link', 'spaceninja_pagination_show_last_link' );

/**
 * Set Comment Gravatar Sizes
 */
function spaceninja_comment_parent_avatar_size() { return 42; }
function spaceninja_comment_reply_avatar_size() { return 42; }
add_filter( 'flatline_comment_parent_avatar_size', 'spaceninja_comment_parent_avatar_size' );
add_filter( 'flatline_comment_reply_avatar_size', 'spaceninja_comment_reply_avatar_size' );

/**
 * Add Script Links
 * This function adds links to additional JS files.
 */
// function flatline_scripts() {
//   if (!is_admin()):
// 		// don't register any scripts
// 	endif;
// }

/* override taxonomy markup */
function flatline_posted_in() {
	the_category( ' ' );
	if ( get_the_tags() ) the_tags( ' ',' ' );
}
