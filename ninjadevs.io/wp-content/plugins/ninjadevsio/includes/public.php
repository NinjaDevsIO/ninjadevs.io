<?php

/* -------------------------------------------------------------------------- */

defined('ABSPATH') or die('hmmm!');

/* -------------------------------------------------------------------------- */

function ninjadevsio_hide_admin_bar() {
	add_filter('show_admin_bar', '__return_false');
}

add_action('wp', 'ninjadevsio_hide_admin_bar', 9999);

/* -------------------------------------------------------------------------- */

function ninjadevsio_bp_per_page($query = '', $object = '') {
    if ($object == 'groups' || $object == 'members') {
        $query .= '&per_page=80';
    }

    return $query;
}

add_filter('bp_ajax_querystring', 'ninjadevsio_bp_per_page', 9999, 2);

/* -------------------------------------------------------------------------- */
