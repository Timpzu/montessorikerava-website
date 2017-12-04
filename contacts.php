<?php /* Template Name: Yhteystiedot */ ?>
<?php get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<header class="page-header" style="background-image:url('<?php echo $backgroundImg[0]; ?>');">
  <div class="container-fluid header-heading">
    <div class="row align-items-center">
      <div class="col-md-5 offset-md-3">
        <h2><?php the_title()?></h2>
      </div>
    </div>
  </div>
</header>
<main class="container-fluid">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <?php
        if (have_posts()) :
          while (have_posts()) : the_post(); ?>
          <p><?php the_content() ?></p>
       <?php endwhile;
       else :
         echo "<p>Sisältö ei löytyny.</p>";
       endif;
       ?>
    </div>
  </div>
  <?php if (is_active_sidebar('contacts_widget_1')) : ?>
  <div class="row">
    <section class="col-md-6 offset-md-3">
      <?php dynamic_sidebar('contacts_widget_1'); ?>
    </section>
  </div>
  <?php endif; ?>
  <div class="row">
    <section class="col-md-6 offset-md-3">
      <h3>Poikkea käymään</h3>
      <iframe class="widget_container" width="600" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJec36TJsAkkYRR9LQDvVV6PA&key=AIzaSyD2iBHRZAiIFckx7MElaA5VbzPqM0RqhvE&language=fi" allowfullscreen></iframe>
    </section>
  </div>
  <?php if (is_active_sidebar('contacts_widget_2')) : ?>
  <div class="row">
    <section class="col-md-6 offset-md-3">
        <div class="widget_container">
          <?php dynamic_sidebar('contacts_widget_2'); ?>
        </div>
    </section>
  </div>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
