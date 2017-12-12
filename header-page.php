<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <nav class="container-fluid">
      <div id="main-nav" class="col-lg-8 offset-lg-2 offset-md-1 col-md-10">
        <div class="emblem-container">
          <a href="<?php echo home_url(); ?>"><img class="emblem" alt="Montessoripäiväkoti Mio -logo" src="<?php echo get_template_directory_uri() ?>/img/logo-nauha2.svg"></a>
        </div>
        <div class="main-menu-container">
          <button onclick="menuBtn()" class="nav-btn"><i class="material-icons">menu</i></button>
          <?php
            $args = array(
              'theme_location' => 'primary'
            );
          ?>
          <?php wp_nav_menu($args); ?>
        </div>
        <?php if (get_theme_mod('mkw_top_nav_display') == 'Yes'): ?>
        <div class="top-menu-container">
            <ul>
              <li><a href="<?php echo get_permalink(get_theme_mod('mkw_top_nav_link')); ?>">
                  <?php echo get_the_title(get_theme_mod('mkw_top_nav_link')); ?></a></li>
            </ul>
        </div>
        <?php endif; ?>
      </div>
    </nav>
    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
    <header class="page-header" style="background-image:url('<?php echo $backgroundImg[0]; ?>');">
      <div class="container-fluid header-heading">
        <div class="row align-items-center">
          <div class="col-md-5 offset-lg-3 offset-md-2">
            <h2><?php the_title()?></h2>
          </div>
        </div>
      </div>
    </header>
