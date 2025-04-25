<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/build/main.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/build/header.css"> <!-- Add the correct path to your compiled CSS -->
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
    <a href="/login" class="login-button">Log In</a> 
  </div>
</header>

<div class="nav-wrapper">
  <nav class="main-nav">
    <?php
      wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'menu_class' => 'nav-links', 
        'container' => false, 
        'fallback_cb' => false 
      ));
    ?>
  </nav>
</div>

<main id="main-content">
</main>
</body>
</html>