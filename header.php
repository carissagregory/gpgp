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
  <div class="header-inner">
    <div class="header-logo">
      <a href="<?php echo esc_url(home_url()); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/GPGPlogo.gif" alt="<?php bloginfo('name'); ?>" style="height: 60px;">
      </a>
    </div>
    <div class="header-text">
      <h1>Great Plains Game Players</h1>
      <p>a social group with a gaming problem</p>
    </div>
  </div>
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
</header>
<main id="main-content">