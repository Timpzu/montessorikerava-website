<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600|Open+Sans:400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <nav class="container-fluid" id="main-nav">
      <div class="col-md-6 offset-md-3">
        <a href="<?php echo home_url(); ?>"><img id="emblem" src="<?php echo get_template_directory_uri() ?>/img/logo-nauha.svg"></a>
        <button onclick="menuBtn()" class="nav-btn"><i class="material-icons">menu</i></button>
        <?php
          $args = array(
            'theme_location' => 'primary'
          );
        ?>
        <?php wp_nav_menu($args); ?>
      </div>
    </nav>
    <header class="main-header" style="background-image:url(<?php header_image(); ?>);">
      <div class="container-fluid header-heading">
        <div class="row align-items-center">
          <section class="col-md-5 offset-md-3" id="intro">
            <h1><?php echo get_theme_mod('mkw_heading'); ?></h1>
            <?php if (get_theme_mod('mkw_headline_btn_display') == 'Yes'): ?>
              <a href="<?php echo get_permalink(get_theme_mod('mkw_headline_link')); ?>" role="button" tabindex="0" class="btn-green" onclick="handleBtnClick(event)" onKeyPress="handleBtnKeyPress(event)"><?php echo get_theme_mod('mkw_headline_btn'); ?></a>
            <?php endif; ?>
          </section>
        </div>
      </div>
    </header>
