<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/build/main.min.css">
  <?php wp_head(); ?>

<style>
  #site-header {
    background-color: #313768;
    color: #E9E3DA;
    padding: 1rem 2rem;
    border-top: 8px solid #932B28;
    border-bottom: 6px solid #932B28;
    display: flex;
    justify-content: space-between;
    align-items: center;}

  #site-header .header-logo {
    display: inline-block;}

  #site-header .header-logo img {
    height: 120px;}

  #site-header .header-text {
    color: #E9E3DA;
    text-align: left;
    margin-left: 20px;}

  #site-header .header-text h1 {
    margin: 0;
    font-family: "Inria Serif", serif;
    font-size: 3rem;
    color: #E9E3DA;
    text-transform: uppercase;}

  #site-header .header-text p {
    margin: 0;
    font-family: "Lato", sans-serif;
    color: #E9E3DA;
    font-size: 1.5rem;}

  .login-button {
    background-color: #BB8A3D;
    color: #E9E3DA;
    padding: 10px 20px;
    text-decoration: none;
    font-family: "Lato", sans-serif;
    border-radius: 5px;
    transition: background-color 0.3s ease;}

  .login-button:hover {
    background-color: #932B28;}

  #site-header .header-login {
    margin-left: auto;}

  .nav-wrapper {
    width: 100%;
    background-color: #A4B9D8;
    padding: 10px 0;}

  .nav-wrapper .main-nav {
    display: flex;
    justify-content: flex-start;
    gap: 3rem;
    padding-left: 20px;}

  .nav-wrapper .main-nav .nav-links {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
    letter-spacing: 1px;}

  .nav-wrapper .main-nav .nav-links li {
    display: inline-block;
    margin-right: 2.5rem;}

  .nav-wrapper .main-nav .nav-links li a {
  color: #000;
  font-family: "Inria Serif", serif;
  text-decoration: none;
  font-size: 1rem;
  font-weight: bold;
  transition: color 0.3s ease;}

  .nav-wrapper .main-nav .nav-links li a:hover {
      color: #932B28;}

  .nav-wrapper .main-nav .nav-links li a:focus,
  .nav-wrapper .main-nav .nav-links li a:active {
    color: #932B28;}
  </style>
    
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="site-header">
  <div class="header-logo">
    <a href="<?php echo esc_url(home_url()); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/GPGPlogo.gif" alt="<?php bloginfo('name'); ?>">
    </a>
  </div>

  <div class="header-text">
    <h1>GREAT PLAINS Game Players</h1>
    <p>a social group with a gaming problem</p>
  </div>

  <div class="header-login">
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