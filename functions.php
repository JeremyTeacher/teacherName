<?php
//Theme Functions Go HERE

function enqueue_my_styles_and_scripts(){

  //enqueue jquery stuff
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_theme_file_uri() . '/myassets/js/jquery-3.6.0.js', array(), null, false);

  //enqueue bootstrap
  wp_enqueue_style('bootstrap-styles', get_stylesheet_directory_uri() . '/myassets/bootstrap/css/bootstrap.min.css', array(), '1.0.0', 'all');
  wp_enqueue_script('bootstrap-script', get_theme_file_uri() . '/myassets/bootstrap/js/bootstrap.bundle.js', array(), '1.0.0', false);



  //enqueue Personal Code
  wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/myassets/css/alum.css', array(), false, 'all');
  wp_enqueue_script('my-script', get_theme_file_uri() . '/myassets/js/alum.js', array('jquery'), '1.0.0', true);

}

add_action('wp_enqueue_scripts','enqueue_my_styles_and_scripts');

function myTheme_setup(){

  //Registering our Nav Menus
  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));

}

add_action('after_setup_theme', 'myTheme_setup');









 ?>
