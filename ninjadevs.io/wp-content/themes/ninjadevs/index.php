<?php if (is_home()) : ?>
  <div class="logo">
    <img src="<?= get_template_directory_uri() ?>/assets/images/logo.png">
  </div>
<? endif; ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<div class="row">

  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
  <?php endwhile; ?>

</div>

<?php the_posts_navigation(); ?>
