<?php

use Roots\Sage\Extras;

?>

<article <?php post_class(Extras\post_list_class()); ?>>

  <div class="card card-post">

    <a href="<?php the_permalink(); ?>">
      <?php if ( has_post_thumbnail() ) { the_post_thumbnail('full', [
        'class' => 'card-img-top img-fluid'
      ]); } ?>
    </a>

    <div class="card-block">
      <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt(); ?>
    </div>

    <div class="card-footer">
      <small><?php get_template_part('templates/entry-meta'); ?></small>
    </div>

  </div>

</article>
