<?php
  //Load CSS
  function getStyle() {
    wp_register_style('normalize', get_template_directory_uri() .'/css/normalize.min.css');
    wp_register_style('grid', get_template_directory_uri() .'/css/bootstrap-grid.min.css');
    wp_register_style('style', get_stylesheet_uri());
    wp_enqueue_style('normalize');
    wp_enqueue_style('grid');
    wp_enqueue_style('style');
  }
  add_action('wp_enqueue_scripts', 'getStyle');
  // Load custom JS
  function getCustomScripts() {
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri('jquery') .
    '/custom-script.js', array()
    );
  }
  add_action('wp_enqueue_scripts', 'getCustomScripts' );

  // Theme setup
  function themeSetup() {

    // Navigation
    register_nav_menus(array(
      'primary' => __('Primary'),
      'footer' => __('Footer')
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
      'name' => 'Etusivun Facebook-virta',
      'id' => 'front_page_widget',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));
    register_sidebar(array(
      'name' => 'Päivähoitolomake',
      'id' => 'daycare_widget',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));
    register_sidebar(array(
      'name' => 'Yhteydenottolomake',
      'id' => 'contact_widget',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));
  }
  add_action('widgets_init','widgets_area_init');
  // Customization options
  function montessorikerava_customize_register( $wp_customize ) {
    // Custom header
  	$wp_customize->add_section('mkw_headline_section', array(
  		'title' => 'Ylätunnisteen otsikko',
  		'priority' => 30,
  	));
    $wp_customize->add_setting('mkw_heading', array(
  		'default' => 'Auta minua tekemään itse.',
  	));
  	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mkw_heading_control', array(
  		'label' => 'Pääotsikko',
  		'section' => 'mkw_headline_section',
  		'settings' => 'mkw_heading',
      'type' => 'text',
  	)));
    $wp_customize->add_setting('mkw_headline_btn_display', array(
  		'default' => 'Yes',
  	));
  	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mkw_headline_btn_display_control', array(
  		'label' => 'Näytetäänkö nappula?',
  		'section' => 'mkw_headline_section',
  		'settings' => 'mkw_headline_btn_display',
      'type' => 'select',
      'choices' => array('No' => 'No', 'Yes' => 'Yes')
  	)));
    $wp_customize->add_setting('mkw_headline_btn', array(
  		'default' => 'Hae paikkaa',
  	));
  	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mkw_headline_btn_control', array(
  		'label' => 'Nappulan teksti',
  		'section' => 'mkw_headline_section',
  		'settings' => 'mkw_headline_btn',
      'type' => 'text',
  	)));
    $wp_customize->add_setting('mkw_headline_link', array());
  	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mkw_headline_link_control', array(
  		'label' => 'Nappulan linkki',
  		'section' => 'mkw_headline_section',
  		'settings' => 'mkw_headline_link',
      'type' => 'dropdown-pages',
  	)));
  }
  add_action('customize_register', 'montessorikerava_customize_register');
?>
