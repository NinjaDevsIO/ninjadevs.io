<?php

/* -------------------------------------------------------------------------- */

defined('ABSPATH') or die('hmmm!');

/* -------------------------------------------------------------------------- */

function ninjadevsio_replace_howdy_message($wp_admin_bar) {
    $my_account = $wp_admin_bar->get_node('my-account');
    $newtitle = str_replace('Howdy,', '', $my_account->title);

    $wp_admin_bar->add_node([
        'id' => 'my-account',
        'title' => $newtitle,
    ]);
}

add_filter('admin_bar_menu', 'ninjadevsio_replace_howdy_message', 9999);

/* -------------------------------------------------------------------------- */

function ninjadevsio_add_homepage_node($meta = false) {
    global $wp_admin_bar, $blog_id, $current_user;

	$args = array(
		'id' => 'bp-home',
		'title' => 'NinjaDevs',
		'href' => '/',
		'meta' => array(
			'class' => 'bp-home',
			'title' => 'NinjaDevs'
		),
	);

	$wp_admin_bar->add_node($args);
}

add_action('admin_bar_menu', 'ninjadevsio_add_homepage_node', 99999);

/* -------------------------------------------------------------------------- */
