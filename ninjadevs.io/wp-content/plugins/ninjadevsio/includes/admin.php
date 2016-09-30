<?php

/* -------------------------------------------------------------------------- */

defined('ABSPATH') or die('hmmm!');

/* -------------------------------------------------------------------------- */

function ninjadevsio_version() {
    return '';
}

add_filter('the_generator', 'ninjadevsio_version', 9999);

/* -------------------------------------------------------------------------- */

function ninjadevsio_remove_footer_text() {
    echo '';
}

add_filter('admin_footer_text', 'ninjadevsio_remove_footer_text');

/* -------------------------------------------------------------------------- */

function ninjadevsio_footer_version() {
    return '&nbsp;';
}

add_filter( 'update_footer', 'ninjadevsio_footer_version', 9999);

/* -------------------------------------------------------------------------- */

function ninjadevsio_remove_admin_bar_menu_items() {
    global $wp_admin_bar;

    $wp_admin_bar->remove_menu('wp-logo');
    $wp_admin_bar->remove_menu('site-name');
    $wp_admin_bar->remove_menu('customize');

    if (!is_user_logged_in()) {
        $wp_admin_bar->remove_menu('my-account');
    }
}

add_action('wp_before_admin_bar_render', 'ninjadevsio_remove_admin_bar_menu_items', 9999);

/* -------------------------------------------------------------------------- */

function ninjadevsio_remove_dashboard_widgets() {
	global $wp_meta_boxes;

	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
}

add_action('wp_dashboard_setup', 'ninjadevsio_remove_dashboard_widgets' );

/* -------------------------------------------------------------------------- */

function ninjadevsio_hide_user_color_scheme() {
    global $_wp_admin_css_colors;
    $_wp_admin_css_colors = 0;
}

add_action('admin_head', 'ninjadevsio_hide_user_color_scheme', 999);

/* -------------------------------------------------------------------------- */
