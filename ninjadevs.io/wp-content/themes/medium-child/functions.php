<?php

add_filter('show_admin_bar', '__return_true');

/* -------------------------------------------------------------------------- */

function ninjadevsio_theme_enqueue_styles() {
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

function ninjadevsio_remove_admin_bar_links() {
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

add_action('wp_before_admin_bar_render', 'ninjadevsio_remove_admin_bar_links', 9999);

/* -------------------------------------------------------------------------- */

function ninjadevsio_replace_howdy($wp_admin_bar) {
    $my_account = $wp_admin_bar->get_node('my-account');
    $newtitle = str_replace('Howdy,', '', $my_account->title);
    $wp_admin_bar->add_node([
        'id' => 'my-account',
        'title' => $newtitle,
    ]);
}

add_filter('admin_bar_menu', 'ninjadevsio_replace_howdy', 9999);

/* -------------------------------------------------------------------------- */

function ninjadevsio_add_login_link($meta = false) {
    global $wp_admin_bar, $blog_id;

    $args = array(
        'id' => 'bp-home',
        'title' => '<img src="/logo-40x40.png" alt="Home">',
        'href' => '/',
        'meta' => array(
            'class' => 'bp-home',
            'title' => 'Home',
        ),
    );

    $wp_admin_bar->add_node($args);

    $args = array(
        'id' => 'bp-clan',
        'title' => '<img src="/menu-clan.png" alt="Clan">',
        'href' => '/clan',
        'meta' => array(
            'class' => 'bp-clan',
            'title' => 'Clan',
        ),
    );

    $wp_admin_bar->add_node($args);

    $args = array(
        'id' => 'bp-clans',
        'title' => '<img src="/menu-clans.png" alt="Clans">',
        'href' => '/clan',
        'meta' => array(
            'class' => 'bp-clans',
            'title' => 'Clans',
        ),
    );

    $wp_admin_bar->add_node($args);

    $args = array(
        'id' => 'bp-wall',
        'title' => '<img src="/menu-wall.png" alt="Wall">',
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

function ninjadevsio_medium_entry_meta() {
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
