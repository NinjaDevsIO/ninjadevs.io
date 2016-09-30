<?php use Roots\Sage\Titles; ?>

<?php if ( bp_is_blog_page() ) : ?>

  <div class="page-header">
    <h1><?= Titles\title(); ?></h1>
    <hr>
  </div>

<?php endif; ?>