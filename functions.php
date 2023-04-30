<?php

//adds the viewport meta tag to the header.php file
function add_viewport_meta_tag() {
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
 }
 wp_enqueue_style( 'style', get_stylesheet_uri() );
 wp_enqueue_style( 'normalize', get_stylesheet_uri() . '/css/normalize.css' );
 
 wp_register_script( 'main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', true );
 
 wp_enqueue_script( 'main' );

add_theme_support( "menus" );

// Create New Menu
function register_my_menus() {
  register_nav_menus( array(
    'header-menu' => 'Header Menu',
  ) );
}
add_action( 'after_setup_theme', 'register_my_menus' );
add_action( 'after_setup_theme', 'register_my_menus' 

//This is to activate the featured image in Posts
if(function_exists("add_theme_support")){
    add_theme_support( 'post-thumbnails' );
}

if(function_exists('add_image_size')){
  add_image_size( 'featured', 400, 250, true );
  add_image_size( 'post-thumb', 125, 75, true );
}

function create_post_type(){
  register_post_type( 'post-type-slug-name', 
    array() 
  );
  
}

//Prevents the <p> tag from getting automatically insterted
remove_filter('the_content', 'wpautop');

add_action( 'init', 'create_post_type' );

function enable_svg_upload( $upload_mimes ) {
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}
add_filter( 'upload_mimes', 'enable_svg_upload', 10, 1 );
