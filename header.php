<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/build/main.min.css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="site-header">
  <div class="header-left">
    <div class="header-logo">
      <a href="<?php echo esc_url(home_url()); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/GPGPlogo.gif" alt="<?php bloginfo('name'); ?>">
      </a>
    </div>
    <div class="header-text">
      <h1>GREAT PLAINS GAME PLAYERS</h1>
      <p>a social group with a gaming problem</p>
    </div>
  </div>

  <div class="header-login">
    <?php get_search_form(); ?>
    <a href="/gpgp/wp-login.php" class="login-button">LogIn</a>
  </div>
</header>

<div class="nav-wrapper">
  <nav class="main-nav">
    <?php
      wp_nav_menu(array(
      'container'       => 'false',
      'container_class' => 'col-md-6',
      'walker'          => new WP_Bootstrap4_Navwalker_Footer(),
      'theme_location'  => 'main-menu',
      'items_wrap'      => '<ul class="menu nav justify-content-end">%3$s</ul>',
    )
  );
    ?>
  </nav>
</div>

<main id="main-content">