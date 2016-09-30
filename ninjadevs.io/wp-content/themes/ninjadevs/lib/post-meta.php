<?php

namespace Roots\Sage\PostMeta;

/**
 * Displays the template for post metadata.
 */
function the_post_meta() {

  $user_id = get_the_author_meta('ID');
  $user_posts = get_author_posts_url($user_id);

  $thumbnail = bp_core_fetch_avatar([
    'item_id' => $user_id,
    'type' => 'thumb',
    'html' => FALSE
  ]);

  $avatar = '<a href="' . $user_posts . '"><img class="img-thumbnail" src="' . $thumbnail . '" /></a>';

  $category_list = get_the_category_list();
  $categories = '';

  if ( !empty($category_list) ) {
    $categories = '<div class="meta-data">' . __('Posted in: ', 'sage') . get_the_category_list(', ') . '</div>';
  }

  $tag_list = get_the_tag_list();
  $tags = '';

  if ( !empty($tag_list) ) {
    $tags = '<div class="meta-data">' . __('Tags: ', 'sage') . get_the_tag_list('', ', ') . '</div>';
  }

  $by = '<a href="' . $user_posts . '">' . get_the_author() . '</a>';

  $date = '<div class="meta-data">' . sprintf(__('On', 'sage') . ' %1$s', esc_html(get_the_date('M d, Y')) . ' ' . __('by', 'sage') . ' ' . $by) . '</div>';

  $coments = '';

  if (comments_open()) {
    if (get_comments_number() >= 1) {
      $coments = '<div class="meta-data">' . __('Comments: ', 'sage') . ' ' . get_comments_number() . '</div>';
    }
  }

  $template = <<<HEREDOC
    <div class="post-meta">
      <div class="row">
        <div class="col-xs-3">
            $avatar
        </div>
        <div class="col-xs-9">
              $categories
              $tags
              $date
              $coments
        </div>
      </div>
    </div>
HEREDOC;

  echo $template;
}