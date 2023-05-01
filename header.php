<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage 10up
 */

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <title><?php wp_title(‘ | ‘, ‘echo’, ‘right’); ?><?php bloginfo(‘name’); ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
<!-- 
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="style.css"> -->
  <?php wp_head(); ?>

  <meta name="theme-color" content="#fafafa">
</head>

<body  <?php body_class(); ?>>
  <a class="skip-to-content-link" href="#main">
    Skip to content
  </a>

  <main aria-labelledby="page_title" role="main">
    <section class="homepage section-1 full-bleed dark">
      <header class="header">
        <a href="#">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/img/site_logo.svg' ); ?>" class="brand-logo" alt="Logo">
        </a>
        <nav role=”navigation” class="main-nav">
          <button aria-label="Open Navigation" class="nav-btn">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon_menu.svg' ); ?>" alt="" >
        </button>
        <div class="nav-box hide">
          <button aria-label="Close Navigation" class="close-btn">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon_close.svg' ); ?>" alt="" >
          </button>
          
          <?php
// Primary navigation menu.
wp_nav_menu( array(
    [
        'menu_class' => 'nav-ul',
        'container' => false,
        'theme_location' => 'header-menu',
        'items_wrap'      => '<ul>%3$s</ul>',
        'depth' => 1
    ]
)  );
?>

        </div>
      </nav>
      </header>
