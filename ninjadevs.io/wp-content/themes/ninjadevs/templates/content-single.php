<?php while (have_posts()) : the_post(); ?>

  <article <?php post_class(); ?>>

    <?php if ( has_post_thumbnail() ) { the_post_thumbnail('full', [
      'class' => 'img-fluid'
    ]); } ?>

    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <h3 class="entry-title-decoration"><?=__('by', 'sage') ?></h3>
      <h2 class="entry-title-author"><a href="<?= get_author_posts_url(get_the_author_meta('ID')) ?>"><?= get_the_author() ?></a></h2>
    </header>

    <div class="entry-content">
      <?php the_content(); ?>
    </div>

    <footer>

      <?php /*if (comments_open()) {

      comments_template('/templates/comments.php');

    } */?>

    </footer>

  </article>

<?php endwhile; ?>
