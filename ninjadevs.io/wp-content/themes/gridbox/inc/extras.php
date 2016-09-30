<?php
/**
 * Custom functions that are not template related
 *
 * @package Gridbox
 */

if ( ! function_exists( 'gridbox_default_menu' ) ) :
/**
 * Display default page as navigation if no custom menu was set
 */
function gridbox_default_menu() {
	global $current_user;

	$profile = get_bloginfo('url') . '/clan/'. $current_user->user_login . '/profile/';

	echo '<ul id="menu-main-navigation" class="main-navigation-menu menu">' .
		wp_list_pages( 'title_li=&echo=0' ) .
		((!is_user_logged_in()) ? '<li class="page_item"><a href="/fadein">Login</a></li>' : '' ) .
		((!is_user_logged_in()) ? '<li class="page_item"><a href="/join">Join</a></li>' : '' ) .
		((is_user_logged_in()) ? '<li class="page_item"><a href="/wp-admin/edit.php">Posts</a></li>' : '' ) .
		((is_user_logged_in()) ? '<li class="page_item"><a href="' . get_bloginfo('url') . '/clan/'. $current_user->user_login . '/profile/' . '">Profile</a></li>' : '' ) .
		((is_user_logged_in()) ? '<li class="page_item"><a href="' . wp_logout_url() . '">Logout</a></li>' : '' ) .
		'</ul>';

}
endif;


/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function gridbox_body_classes( $classes ) {

	// Get theme options from database.
	$theme_options = gridbox_theme_options();

	// Switch sidebar layout to left.
	if ( 'left-sidebar' == $theme_options['layout'] ) {
		$classes[] = 'sidebar-left';
	}

	// Add sticky header class.
	if ( true == $theme_options['sticky_header'] ) {
		$classes[] = 'sticky-header';
	}

	// Add post columns classes.
	if ( 'two-columns' == $theme_options['post_layout'] ) {
		$classes[] = 'post-layout-two-columns post-layout-columns';
	} elseif ( 'three-columns' == $theme_options['post_layout'] ) {
		$classes[] = 'post-layout-three-columns post-layout-columns';
	} elseif ( 'four-columns' == $theme_options['post_layout'] ) {
		$classes[] = 'post-layout-four-columns post-layout-columns';
	}

	// Add no-sidebar class.
	if ( ! is_active_sidebar( 'sidebar' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'gridbox_body_classes' );


/**
 * Change excerpt length for default posts
 *
 * @param int $length Length of excerpt in number of words.
 * @return int
 */
function gridbox_excerpt_length( $length ) {

	// Get theme options from database.
	$theme_options = gridbox_theme_options();

	// Return excerpt text.
	if ( $theme_options['excerpt_length'] >= 0 ) {

		return absint( $theme_options['excerpt_length'] );

	} else {

		return 30; // Number of words.

	}
}
add_filter( 'excerpt_length', 'gridbox_excerpt_length' );


/**
 * Change excerpt more text for posts
 *
 * @param String $more_text Excerpt More Text.
 * @return string
 */
function gridbox_excerpt_more( $more_text ) {

	return '...';

}
add_filter( 'excerpt_more', 'gridbox_excerpt_more' );


/**
 * Set wrapper start for wooCommerce
 */
function gridbox_wrapper_start() {
	echo '<section id="primary" class="content-area">';
	echo '<main id="main" class="site-main" role="main">';
}
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
add_action( 'woocommerce_before_main_content', 'gridbox_wrapper_start', 10 );


/**
 * Set wrapper end for wooCommerce
 */
function gridbox_wrapper_end() {
	echo '</main><!-- #main -->';
	echo '</section><!-- #primary -->';
}
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
add_action( 'woocommerce_after_main_content', 'gridbox_wrapper_end', 10 );
