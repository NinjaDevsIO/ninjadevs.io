<?php

add_filter('show_admin_bar', '__return_true');

/* -------------------------------------------------------------------------- */

function ninjadevsio_theme_enqueue_styles()
{
    $parent_style = 'parent-style';

    wp_enqueue_style($parent_style, get_template_directory_uri().'/style.css');

    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri().'/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
}

add_action('wp_enqueue_scripts', 'ninjadevsio_theme_enqueue_styles', 9999);

/* -------------------------------------------------------------------------- */

function ninjadevsio_remove_admin_bar_links()
{
    global $wp_admin_bar;

    //Remove WordPress Logo Menu Items
    $wp_admin_bar->remove_menu('wp-logo'); // Removes WP Logo and submenus completely, to remove individual items, use the below mentioned codes
    $wp_admin_bar->remove_menu('about'); // 'About WordPress'
    $wp_admin_bar->remove_menu('wporg'); // 'WordPress.org'
    $wp_admin_bar->remove_menu('documentation'); // 'Documentation'
    $wp_admin_bar->remove_menu('support-forums'); // 'Support Forums'
    $wp_admin_bar->remove_menu('feedback'); // 'Feedback'

    //Remove Site Name Items
    $wp_admin_bar->remove_menu('site-name'); // Removes Site Name and submenus completely, To remove individual items, use the below mentioned codes
    $wp_admin_bar->remove_menu('view-site'); // 'Visit Site'
    $wp_admin_bar->remove_menu('dashboard'); // 'Dashboard'
    $wp_admin_bar->remove_menu('themes'); // 'Themes'
    $wp_admin_bar->remove_menu('widgets'); // 'Widgets'
    $wp_admin_bar->remove_menu('menus'); // 'Menus'
}

add_action('wp_before_admin_bar_render', 'ninjadevsio_remove_admin_bar_links', 9999);

/* -------------------------------------------------------------------------- */

function ninjadevsio_replace_howdy($wp_admin_bar)
{
    $my_account = $wp_admin_bar->get_node('my-account');
    $newtitle = str_replace('Howdy,', '', $my_account->title);
    $wp_admin_bar->add_node([
        'id' => 'my-account',
        'title' => $newtitle,
    ]);
}

add_filter('admin_bar_menu', 'ninjadevsio_replace_howdy', 9999);

/* -------------------------------------------------------------------------- */

function ninjadevsio_add_login_link($meta = false)
{
    global $wp_admin_bar, $blog_id;

    $args = array(
        'id' => 'bp-home',
        'title' => 'ninjadevs.io',
        'href' => '/',
        'meta' => array(
            'class' => 'bp-home',
            'title' => 'Home',
        ),
    );

    $wp_admin_bar->add_node($args);

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
            'id' => 'bp-register',
            'title' => 'Join',
            'href' => '/join',
            'meta' => array(
                'class' => 'bp-register',
                'title' => 'Join',
            ),
        );
    }

    $wp_admin_bar->add_node($args);

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
}

add_action('admin_bar_menu', 'ninjadevsio_add_login_link', 99999);

/* -------------------------------------------------------------------------- */

function ninjadevsio_medium_entry_meta()
{
    $medium_category_list = '';
    $medium_category_list = get_the_category_list();

    if (!empty($medium_category_list)) {
        $medium_category_list = _e('Posted in', 'medium');
    }
    echo ' '.get_the_category_list(', ');

    $medium_tag_list = '';
    $medium_tag_list = get_the_tag_list();

    if (!empty($medium_tag_list)) {
        $medium_tag_list = _e(' Tags', 'medium');
    }
    echo ' '.get_the_tag_list('', ', ');

    $medium_date = sprintf('<li>'.__('On', 'medium').' %1$s</li>',
        esc_html(get_the_date('M d, Y'))
    );

    $medium_author = sprintf('<li>'.__('By', 'medium').' <a href="%1$s" title="%2$s" >%3$s</a></li>',
        esc_url(get_author_posts_url(get_the_author_meta('ID'))),
        esc_attr(sprintf(__('View all posts by %s', 'medium'), get_the_author())),
        get_the_author()
    );

    if (comments_open()) {
        if (get_comments_number() >= 1) {
            $medium_comments = '<li>'.__('Comments', 'medium').' '.get_comments_number().'</li>';
        } else {
            $medium_comments = '';
        }
    } else {
        $medium_comments = '';
    }

    printf('%1$s %2$s %3$s %4$s',
        $medium_category_list,
        $medium_date,
        $medium_comments,
        $medium_tag_list
    );
}

/* -------------------------------------------------------------------------- */
