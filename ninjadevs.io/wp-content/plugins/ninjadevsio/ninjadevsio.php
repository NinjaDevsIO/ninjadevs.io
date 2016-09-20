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

function custom_change_labels($translated) {
    $translated = str_replace('All Members', 'Clan', $translated);
    $translated = str_replace('Cancel Frienship Request', 'Cancel Follow Request', $translated);
    $translated = str_replace('Cancel Frienship', 'Unfollow', $translated);
    $translated = str_replace('Add Friend', 'Follow', $translated);
    $translated = str_replace('Search Members', 'Search Clan', $translated);

    $translated = str_replace('Groups', 'Clans', $translated);
    $translated = str_replace('All Groups', 'All Clans', $translated);
    $translated = str_replace('My Groups', 'My Clans', $translated);
    $translated = str_replace('Create a Group', 'Create a Clan', $translated);
    $translated = str_replace('Search Groups', 'Search All Clans', $translated);

    $translated = str_replace('Friendships', 'Clan', $translated);
    $translated = str_replace('Friends', 'My Clan', $translated);

    $translated = str_replace('Favorite', '♥', $translated);

    return $translated;

}

add_filter('gettext', 'custom_change_labels');
add_filter('ngettext', 'custom_change_labels');

/* -------------------------------------------------------------------------- */

?>
