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

/**
 * Display warning on old posts
 * via http://www.thatsgeeky.com/2012/04/adding-a-notification-to-old-wordpress-posts/
 */
function flatline_post_header() {
	if( is_singular('post') && in_category( 'professional' ) ) {
		if((get_the_time('U') < strtotime('1 year ago'))) { 
			$now = new DateTime();
			$ref = new DateTime(get_the_time('r'));
			$diff = $now->diff($ref);
			$interval = "";
			if ($diff->y){$interval .= $diff->y . " year" . ($diff->y == 1?"":"s");}
			if ($diff->m){$interval .= ($interval?", ":"") . $diff->m . " month" . ($diff->m == 1?"":"s");} ?>
			<div class="warning old-post">
				This article was published <strong><?php echo $interval; ?> ago</strong>. Due to the rapidly evolving nature of web development, some concepts may no longer be applicable.
			</div>
		<?php }
	}
}

/**
 * Override taxonomy markup
 */
function flatline_posted_in() {
	the_category( ' ' );
	if ( get_the_tags() ) the_tags( ' ',' ' );
}

/**
 * Override the default post byline
 */
function flatline_posted_on() {
	printf( '<time datetime="%1$s" pubdate><a href="%2$s"><span class="month">%3$s</span> <span class="date">%4$s</span> <span class="year">%5$s</span></a></time>',
		esc_attr( get_the_date( 'c' ) ),
		get_permalink(),
		get_the_date( 'M' ),
		get_the_date( 'd' ),
		get_the_date( 'Y' )
	);
	edit_post_link( 'Edit', '<span class="edit-link">', '</span>' );
}
