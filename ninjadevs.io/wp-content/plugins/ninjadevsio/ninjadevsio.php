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

function ninjadevsio_hide_color_scheme() {
    global $_wp_admin_css_colors;
    $_wp_admin_css_colors = 0;
}

add_action('admin_head', 'ninjadevsio_hide_color_scheme', 999);

/* -------------------------------------------------------------------------- */


function change_bar_color() {
    ?>
    <style>

        #wpbody {
            margin-top: 22px;
        }

        #wpadminbar {
            background: #007acc !important;
            height: 55px;
        }

        #wpadminbar #wp-admin-bar-root-default,
        #wpadminbar #wp-admin-bar-root-secondary {
            margin: 11px 10px;
        }

        #wpadminbar ul#wp-admin-bar-root-default>li,
        .network-admin #wpadminbar ul#wp-admin-bar-top-secondary>li#wp-admin-bar-my-account {
            margin-right: 10px;
        }

        #wpadminbar .ab-top-menu>li.hover>.ab-item,
        #wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus,
        #wpadminbar:not(.mobile) .ab-top-menu>li:hover>.ab-item,
        #wpadminbar:not(.mobile) .ab-top-menu>li>.ab-item:focus {
            border-radius: 4px;
            background: #0070bb;
            color: #fff;
        }

        #wpadminbar:not(.mobile)>#wp-toolbar a:focus span.ab-label,
        #wpadminbar:not(.mobile)>#wp-toolbar li:hover span.ab-label,
        #wpadminbar>#wp-toolbar li.hover span.ab-label {
            color: #fff;
        }

        #wpadminbar .menupop .ab-sub-wrapper,
        #wpadminbar .shortlink-input {
        	color: #fff;
        	-webkit-box-shadow: none;
        	box-shadow: none;
        	background: #007acc;
        }

        #wpadminbar .ab-submenu .ab-item {
        	color: #fff;
        }

        #wpadminbar .quicklinks .menupop ul.ab-sub-secondary,
        #wpadminbar .quicklinks .menupop ul.ab-sub-secondary .ab-submenu {
            background: #007acc;
            color: #fff;
        }

        ul.ab-submenu a.ab-item:hover {
            color: #fff !important;
        }

        @media screen and (max-width: 782px) {
            html #wpadminbar {
                height: 55px;
                min-width: 300px;
            }

            #wpadminbar, #wpadminbar * {
                font-size: 13px;
                font-weight: 400;
                line-height: 32px;
            }

            #wpadminbar #wp-admin-bar-root-default,
            #wpadminbar #wp-admin-bar-root-secondary {
                margin: 4px;
                margin-right: 10px;
            }

            #wp-toolbar>ul>li,
            #wpadminbar #wp-admin-bar-user-actions.ab-submenu img.avatar {
                display: block;
                display: initial;
            }

            #wpadminbar ul#wp-admin-bar-root-default>li,
            .network-admin #wpadminbar ul#wp-admin-bar-top-secondary>li#wp-admin-bar-my-account {
                margin-right: 10px;
                margin-left: 10px;
            }

            #wpadminbar .ab-top-menu>li.hover>.ab-item,
            #wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus,
            #wpadminbar:not(.mobile) .ab-top-menu>li:hover>.ab-item,
            #wpadminbar:not(.mobile) .ab-top-menu>li>.ab-item:focus {
                border: none;
                background: transparent;
            }
        }

    </style>
    <?php
}

add_action('wp_head', 'change_bar_color');
add_action('admin_head', 'change_bar_color');

/* -------------------------------------------------------------------------- */

?>
