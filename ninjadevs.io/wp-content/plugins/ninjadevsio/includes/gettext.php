<?php

/* -------------------------------------------------------------------------- */

defined('ABSPATH') or die('hmmm!');

/* -------------------------------------------------------------------------- */

function custom_change_labels($translated) {

    $translated = str_replace('All Members', 'Clan', $translated);
    $translated = str_replace('My Friends', 'Following', $translated);
    $translated = str_replace('Search Members', 'Search Clan', $translated);

    $translated = str_replace('Cancel Friendship Request', 'Cancel Request', $translated);
    $translated = str_replace('Cancel Friendship', 'Unfollow', $translated);
    $translated = str_replace('Add Friend', 'Follow', $translated);

    $translated = str_replace('All Groups', 'Clans', $translated);
    $translated = str_replace('My Groups', 'My Clans', $translated);

    $translated = str_replace('Join Group', 'Join Clan', $translated);
    $translated = str_replace('Leave Group', 'Leave Clan', $translated);

    $translated = str_replace('Friends', 'Following', $translated);
    $translated = str_replace('Groups', 'Clans', $translated);

    $translated = str_replace('Favorite', '♥', $translated);
    $translated = str_replace('Remove ♥', '♥', $translated);
    return $translated;
}

add_filter('gettext', 'custom_change_labels');
add_filter('ngettext', 'custom_change_labels');

/* -------------------------------------------------------------------------- */
