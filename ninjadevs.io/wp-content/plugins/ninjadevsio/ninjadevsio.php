<?php

/*
Plugin Name: ninjadevs.io
Plugin URI: http://www.ninjadevs.io
Description:  ninjadevs.io plugin
Author: ninjadevs.io
Version: 1.0
Author URI: http://www.ninjadevs.io
*/

/* -------------------------------------------------------------------------- */

define('NINJADEVSIO_VERSION', '1.0');
define('NINJADEVSIO_PATHABS', dirname(__FILE__));
define('NINJADEVSIO_PATHREL', plugins_url() . '/' . basename(NINJADEVSIO_PATHABS));

/* -------------------------------------------------------------------------- */

function ninjadevsio_version() {
    return '';
}

add_filter('the_generator', 'ninjadevsio_version', 9999);

/* -------------------------------------------------------------------------- */

function ninjadevsio_footer_version() { return '&nbsp;'; }

add_filter( 'update_footer', 'ninjadevsio_footer_version', 9999);

/* -------------------------------------------------------------------------- */

function ninjadevsio_remove_footer_text() {
    echo '';
}

add_filter('admin_footer_text', 'ninjadevsio_remove_footer_text');

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

function ninjadevsio_add_thumb_column($cols) {
    $cols['ninjadevsio_post_thumb'] = __('Featured Image');
    return $cols;
}

function ninjadevsio_view_thumb_column($col, $id) {
    if (function_exists('the_post_thumbnail'))
        echo the_post_thumbnail( 'thumb' );
}

add_filter('manage_posts_columns', 'ninjadevsio_add_thumb_column', 999);
add_filter('manage_pages_columns', 'ninjadevsio_add_thumb_column', 999);

add_action('manage_posts_custom_column', 'ninjadevsio_view_thumb_column', 999, 2);
add_action('manage_pages_custom_column', 'ninjadevsio_view_thumb_column', 999, 2);

/* -------------------------------------------------------------------------- */

?>
