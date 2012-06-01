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

function spaceninja_register_scripts() {
	$tmpl_url = get_stylesheet_directory_uri();
	wp_register_script ( 'spaceninja', $tmpl_url . '/js/spaceninja.js', array( 'jquery' ), '1.0', true );
}
add_action('init', 'spaceninja_register_scripts');

/**
 * Add Script Links
 * This function adds links to additional JS files.
 */
function flatline_scripts() {
  if (!is_admin()):
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'spaceninja' );
	endif;
}

/* override taxonomy markup */
function flatline_posted_in() {
	the_category( ' ' );
	if ( get_the_tags() ) the_tags( ' ',' ' );
}

/**
 * Prints HTML with meta information for the current post-date/time and author.
 * Create your own flatline_posted_on to override in a child theme
 */
function flatline_posted_on() {
	printf( __( 'By %1$s on %2$s', 'flatline' ),
		sprintf( '<a href="%1$s">%2$s</a>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_html( get_the_author() )
		),
		sprintf( '<time datetime="%1$s" pubdate><a href="%2$s">%3$s</a></time>',
			esc_attr( get_the_date( 'c' ) ),
			get_permalink(),
			get_the_date()
		)
	);
	edit_post_link( __( 'Edit', 'flatline' ), ' | <span class="edit-link">', '</span>' );
}
