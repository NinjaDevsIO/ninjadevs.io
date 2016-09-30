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

function ninjadevsio_bp_exclude_users($qs=false, $object=false) {
    $excluded_user = '1';

    if ($object != 'members')
        return $qs;

    $args = wp_parse_args($qs);

    if (!empty($args['user_id']) || !empty($args['search_terms']))
        return $qs;

    if (!empty($args['exclude']))
        $args['exclude'] = $args['exclude'] . ',' . $excluded_user;
    else
        $args['exclude'] = $excluded_user;

    $qs = build_query($args);

    return $qs;
}

add_action('bp_ajax_querystring', 'ninjadevsio_bp_exclude_users', 9999, 2);

/* -------------------------------------------------------------------------- */
