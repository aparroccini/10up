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
  <title></title>
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