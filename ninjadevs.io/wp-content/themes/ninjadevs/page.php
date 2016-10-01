<div class="page-image">
  <?php if ( has_post_thumbnail() ) { the_post_thumbnail('full', [
    'class' => 'img-fluid m-x-auto d-block'
  ]); } ?>
</div>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
