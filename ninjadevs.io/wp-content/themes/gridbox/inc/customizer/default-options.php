<?php
/**
 * Returns theme options
 *
 * Uses sane defaults in case the user has not configured any theme options yet.
 *
 * @package Gridbox
 */

/**
 * Get saved user settings from database or theme defaults
 *
 * @return array
 */
function gridbox_theme_options() {

	// Merge theme options array from database with default options array.
	$theme_options = wp_parse_args( get_option( 'gridbox_theme_options', array() ), gridbox_default_options() );

	// Return theme options.
	return $theme_options;

}


/**
 * Returns the default settings of the theme
 *
 * @return array
 */
function gridbox_default_options() {

	$default_options = array(
		'site_title'						=> true,
		'custom_header_link'				=> '',
		'custom_header_hide'				=> false,
		'layout' 							=> 'right-sidebar',
		'sticky_header'						=> false,
		'blog_title'						=> '',
		'blog_description'					=> '',
		'post_layout'						=> 'three-columns',
		'excerpt_length' 					=> 25,
		'meta_date'							=> true,
		'meta_author'						=> true,
		'meta_category'						=> true,
		'featured_image'					=> true,
		'meta_tags'							=> true,
		'post_navigation'					=> true,
		'featured_magazine' 				=> false,
		'featured_blog' 					=> false,
		'featured_category' 				=> 0,
	);

	return $default_options;
}
