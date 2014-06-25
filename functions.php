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
 * Register and enqueue addition JS files
 */
function spaceninja_register_scripts() {
	$tmpl_url = get_stylesheet_directory_uri();
	wp_register_script ( 'spaceninja', $tmpl_url . '/js/spaceninja.js', array( 'jquery' ), '1.0', true );
}
add_action('init', 'spaceninja_register_scripts');
function flatline_scripts() {
  if (!is_admin()):
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'spaceninja' );
	endif;
}

/**
 * Disable comments on pages
 */
function flatline_page_comments() {
	return false;
}
