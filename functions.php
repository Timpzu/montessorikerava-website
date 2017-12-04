<?php
  //Load CSS
  function getStyle() {
    wp_register_style('normalize', get_template_directory_uri() .'/css/normalize.css');
    wp_register_style('grid', get_template_directory_uri() .'/css/bootstrap-grid.css');
    wp_register_style('style', get_stylesheet_uri());
    wp_enqueue_style('normalize');
    wp_enqueue_style('grid');
    wp_enqueue_style('style');
  }
  add_action('wp_enqueue_scripts', 'getStyle');

  // Load custom JS
  function getCustomScripts() {
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() .
    '/custom-script.js', array()
    );
  }
  add_action('wp_enqueue_scripts', 'getCustomScripts' );

  // Theme setup
  function themeSetup() {
    // Navigation
    register_nav_menus(array(
      'primary' => __('Primary'),
    ));
    // Custom header
    $args = array(
      'default-image' => get_template_directory_uri() . '/img/montessori8.jpg',
      'uploads' => true,
      'width' => 1280,
      'height' => 480,
    );
    add_theme_support('custom-header', $args);
    // Page header image
    add_theme_support('post-thumbnails');
    add_image_size('page-header', 1280, 280);
  }
  add_action('after_setup_theme', 'themeSetup');
  // Register widget area
  function widgets_area_init() {
    register_sidebar(array(
      'name' => 'Etusivu 2',
      'id' => 'frontpage_widget_2',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));
    register_sidebar(array(
      'name' => 'Yhteystiedot 1',
      'id' => 'contacts_widget_1',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));
    register_sidebar(array(
      'name' => 'Yhteystiedot 2',
      'id' => 'contacts_widget_2',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));
    register_sidebar(array(
      'name' => 'Päivähoito 1',
      'id' => 'daycare_widget_1',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));
    register_sidebar(array(
      'name' => 'Toiminta 1',
      'id' => 'activity_widget_1',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));
  }
  add_action('widgets_init','widgets_area_init');
?>
