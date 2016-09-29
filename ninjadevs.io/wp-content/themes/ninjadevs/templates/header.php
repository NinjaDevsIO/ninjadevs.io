<header class="navbar navbar-full navbar-dark bg-inverse">

  <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
  <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#primary-navigation">&#9776;</button>

  <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu([
        'menu' => 'primary_navigation',
        'theme_location' => 'primary_navigation',
        'depth' => 2,
        'container' => 'div',
        'container_class' => 'collapse navbar-toggleable-xs',
        'container_id' => 'primary-navigation',
        'menu_class' => 'nav navbar-nav',
        'walker' => new wp_bootstrap_navwalker()
      ]);
    endif;
  ?>

</header>
