<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="build/main.min.css">
  <?php wp_head(); ?>
</head>
<?php
$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' );
$navbar_position = get_theme_mod( 'navbar_position', 'static' );
$search_enabled  = get_theme_mod( 'search_enabled', '1' );
?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'gpgp-theme' ); ?></a>
<div id="wrapper">
<header>
<nav id="header" class="navbar navbar-expand-md <?php echo esc_attr( $navbar_scheme ); if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' fixed-top'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' fixed-bottom'; endif; if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>">
  <div class="container">
    <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/GPGPlogo.gif' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'gpgp-theme' ); ?>">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbar" class="collapse navbar-collapse">
      <?php
      wp_nav_menu(
        array(
          'menu_class'     => 'navbar-nav me-auto',
          'container'      => '',
          'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
          'walker'         => new WP_Bootstrap_Navwalker(),
          'theme_location' => 'main-menu',
        )
      );
      if ( '1' === $search_enabled ) :
      ?>
      <form class="search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="input-group">
          <input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Search', 'gpgp-theme' ); ?>" title="<?php esc_attr_e( 'Search', 'gpgp-theme' ); ?>" />
          <button type="submit" name="submit" class="btn btn-outline-secondary"><?php esc_html_e( 'Search', 'gpgp-theme' ); ?></button>
        </div>
      </form>
      <?php endif; ?>
    </div>
  </div>
</nav>
</header>
<main id="main" class="container"<?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 100px;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
<?php
if ( is_single() || is_archive() ) :
?>
<div class="row">
  <div class="col-md-8 col-sm-12">
<?php endif; ?>