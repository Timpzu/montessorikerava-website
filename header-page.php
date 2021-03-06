<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <nav id="main-nav" aria-label="Päänavigaatio">
      <button onclick="menuBtn()" id="mobile-nav-button" class="nav-btn" aria-label="Mobiilinavigaatio" aria-expanded="false"><i class="material-icons">menu</i></button>
      <a class="emblem" href="<?php echo home_url(); ?>"><img alt="Montessoripäiväkoti Mio" src="<?php echo get_template_directory_uri() ?>/img/logo-nauha2.svg"></a>
      <a class="emblem-mobile" href="<?php echo home_url(); ?>"><img alt="Montessoripäiväkoti Mio" src="<?php echo get_template_directory_uri() ?>/img/mio-logo.svg"></a>
      <?php
        $args = array('theme_location' => 'primary');
      ?>
      <?php wp_nav_menu($args); ?>
      <?php if (get_theme_mod('mkw_top_nav_display') == 'Yes'): ?>
      <div class="secondary-nav" aria-label="Muita linkkejä">
        <img class="flag" alt="" src="<?php echo get_template_directory_uri() ?>/img/yhdistys-nauha.svg">
        <ul>
          <li><a href="<?php echo get_permalink(get_theme_mod('mkw_top_nav_link')); ?>">
              <?php echo get_the_title(get_theme_mod('mkw_top_nav_link')); ?></a></li>
        </ul>
      </div>
      <?php endif; ?>
    </nav>
    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
    <header class="page-header" style="background-image:url('<?php echo $backgroundImg[0]; ?>');">
      <div class="container-fluid header-heading">
        <div class="row align-items-center">
          <div class="col-md-5 offset-lg-3 offset-md-2">
            <div class="x">
              <h2><?php the_title()?></h2>
            </div>

          </div>
        </div>
      </div>
    </header>
