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

function ninjadevsio_remove_admin_bar() {
	add_filter( 'show_admin_bar', '__return_false' );
}

add_action('wp', 'ninjadevsio_remove_admin_bar');

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

// add_filter('manage_posts_columns', 'ninjadevsio_add_thumb_column', 999);
// add_filter('manage_pages_columns', 'ninjadevsio_add_thumb_column', 999);
//
// add_action('manage_posts_custom_column', 'ninjadevsio_view_thumb_column', 999, 2);
// add_action('manage_pages_custom_column', 'ninjadevsio_view_thumb_column', 999, 2);

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
            background: #000 !important;
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
        	background: #000;
        }

        #wpadminbar .ab-submenu .ab-item {
        	color: #fff;
        }

        #wpadminbar .quicklinks .menupop ul.ab-sub-secondary,
        #wpadminbar .quicklinks .menupop ul.ab-sub-secondary .ab-submenu {
            background: #000;
            color: #fff;
        }

        ul.ab-submenu a.ab-item:hover {
            color: #fff !important;
        }

		#adminmenu,
		#adminmenu .wp-submenu,
		#adminmenuback, #adminmenuwrap {
		    background-color: #000;
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

function ninjadevsio_theme_enqueue_styles2() {
    $parent_style = 'parent-style';

    wp_enqueue_style($parent_style, get_template_directory_uri().'/style.css');

    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri().'/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
}

add_action('wp_enqueue_scripts', 'ninjadevsio_theme_enqueue_styles2', 9999);

/* -------------------------------------------------------------------------- */

function ninjadevsio_remove_admin_bar_links2() {
    global $wp_admin_bar;

    //Remove WordPress Logo Menu Items
    $wp_admin_bar->remove_menu('wp-logo');
    //Remove Site Name Items
    $wp_admin_bar->remove_menu('site-name');
    $wp_admin_bar->remove_menu('customize');

    if (!is_user_logged_in()) {
        $wp_admin_bar->remove_menu('my-account');
    }

    // $wp_admin_bar->remove_menu('itsec_admin_bar_menu');

    // $wp_admin_bar->remove_menu('view-site');
    // $wp_admin_bar->remove_menu('dashboard');
    // $wp_admin_bar->remove_menu('themes');
    // $wp_admin_bar->remove_menu('widgets');
    // $wp_admin_bar->remove_menu('menus');
}

add_action('wp_before_admin_bar_render', 'ninjadevsio_remove_admin_bar_links2', 9999);

/* -------------------------------------------------------------------------- */

function ninjadevsio_replace_howdy2($wp_admin_bar) {
    $my_account = $wp_admin_bar->get_node('my-account');
    $newtitle = str_replace('Howdy,', '', $my_account->title);
    $wp_admin_bar->add_node([
        'id' => 'my-account',
        'title' => $newtitle,
    ]);
}

add_filter('admin_bar_menu', 'ninjadevsio_replace_howdy2', 9999);

/* -------------------------------------------------------------------------- */

function ninjadevsio_add_login_link2($meta = false) {
    global $wp_admin_bar, $blog_id, $current_user;;

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

    $args = array(
        'id' => 'bp-clan',
        'title' => 'Clan',
        'href' => '/clan',
        'meta' => array(
            'class' => 'bp-clan',
            'title' => 'Clan',
        ),
    );

    $wp_admin_bar->add_node($args);

    $args = array(
        'id' => 'bp-clans',
        'title' => 'Clans',
        'href' => '/clans',
        'meta' => array(
            'class' => 'bp-clans',
            'title' => 'Clans',
        ),
    );

    $wp_admin_bar->add_node($args);

    $args = array(
        'id' => 'bp-wall',
        'title' => 'Wall',
        'href' => '/wall',
        'meta' => array(
            'class' => 'bp-wall',
            'title' => 'Wall',
        ),
    );

    $wp_admin_bar->add_node($args);

	/*
    if (!is_user_logged_in()) {
        $args = array(
            'id' => 'bp-login',
            'title' => 'Login',
            'href' => '/fadein',
            'meta' => array(
                'class' => 'bp-login',
                'title' => 'Login',
            ),
        );

        $wp_admin_bar->add_node($args);

        $args = array(
            'id' => 'bp-join',
            'title' => 'Join',
            'href' => '/join',
            'meta' => array(
                'class' => 'bp-join',
                'title' => 'Join',
            ),
        );

        $wp_admin_bar->add_node($args);
    } else {
        $args = array(
            'id' => 'bp-profile',
            'title' => 'Profile',
            'href' => get_bloginfo('url') . '/clan/'. $current_user->user_login . '/profile/',
            'meta' => array(
                'class' => 'bp-profile',
                'title' => 'Profile',
            ),
        );

        $wp_admin_bar->add_node($args);

        $args = array(
            'id' => 'bp-logout',
            'title' => 'Logout',
            'href' => wp_logout_url(),
            'meta' => array(
                'class' => 'bp-logout',
                'title' => 'Logout',
            ),
        );

        $wp_admin_bar->add_node($args);
    }
	*/
}

add_action('admin_bar_menu', 'ninjadevsio_add_login_link2', 99999);

/* -------------------------------------------------------------------------- */

add_filter( 'wp_nav_menu_items', 'my_nav_menu_profile_link2' );
function my_nav_menu_profile_link2($menu) {
	$profilelink = '<li><a href="' . bp_loggedin_user_domain( '/' ) . '">' . __('Visit your Awesome Profile') . '</a></li>';
	$menu = $menu . $profilelink;
	return $menu;
}

/* -------------------------------------------------------------------------- */

function ninjadevsio_medium_entry_meta2() {
    $user_id = get_the_author_meta('ID');
    $user_posts = get_author_posts_url($user_id);

    $thumbnail = bp_core_fetch_avatar(
        array(
            'item_id' => $user_id,
            'type'    => 'thumb',
            'html'    => TRUE
        )
    );

    $avatar = '<a href="' . $user_posts . '">' . $thumbnail . '</a>';

    $category_list = '';
    $category_list = get_the_category_list();

    if (!empty($category_list)) {
        $categories = '<div class="post-user-meta-row">' . __('Posted in: ', 'medium') . get_the_category_list(', ') . '</div>';
    }

    $tag_list = '';
    $tag_list = get_the_tag_list();

    if (!empty($tag_list)) {
        $tags = '<div class="post-user-meta-row">' . __('Tags: ', 'medium') . get_the_tag_list('', ', ') . '</div>';
    }

    $by = '<a href="' . $user_posts . '">' . get_the_author() . '</a>';

    $date = '<div class="post-user-meta-row">' . sprintf(
        __('On ', 'medium') .
        ' %1$s', esc_html(get_the_date('M d, Y')) .
        __(' by ', 'medium') . $by
    ) . '</div>';

    $coments = '';

    if (comments_open()) {
        if (get_comments_number() >= 1) {
            $coments = '<div class="post-user-meta-row">' . __('Comments: ', 'medium') . ' ' . get_comments_number() . '</div>';
        }
    }

$template = <<<HEREDOC
    <li>
        <div class="post-user">
            <div class="post-user-avatar">
                $avatar
            </div>

        	<div class="post-user-meta">
                $categories
                $tags
                $date
        	</div>
        </div>
    </li>
HEREDOC;

    echo $template;
}

/* -------------------------------------------------------------------------- */

?>
