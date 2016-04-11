<header class="banner">
  <nav class="nav-primary navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      </div>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right']);
      endif;
      ?>
    </div>
  </nav>
</header>
