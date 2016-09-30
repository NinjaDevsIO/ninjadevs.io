<?php
/**
 * Template Name: Buddypress
 */
?>

<div class="card">

  <div class="card-block">

    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('templates/content', 'page'); ?>
    <?php endwhile; ?>

  </div>

</div>
