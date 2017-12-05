<?php get_header(); ?>
<header class="main-header" style="background-image:url(<?php header_image(); ?>);">
  <div class="container-fluid header-heading">
    <div class="row align-items-center">
      <section class="col-md-5 offset-md-3" id="intro">
        <h1>Auta minua tekemään itse.</h1>
        <button type="button" name="button" class="btn-green">Hae paikkaa</button>
      </section>
    </div>
  </div>
</header>
<main class="container-fluid">
  <div class="">
    <section class="col-md-6 offset-md-3" id="about">
      <?php
        if (have_posts()) :
          while (have_posts()) : the_post(); ?>
          <p><?php the_content() ?></p>
       <?php endwhile;
       else :
         echo "<p>Sisältö ei löytyny.</p>";
       endif;
       ?>
    </section>
  </div>
  <div class="row row row-dark">
    <section class="col-md-6 offset-md-3">
      <h3>Vanhempien suositukset</h3>
      <div class="fill"></div>
    </section>
  </div>
  <div class="row">
    <section class="col-md-6 offset-md-3">
      <?php if (is_active_sidebar('frontpage_widget_2')) : ?>
        <div class="widget_container">
          <?php dynamic_sidebar('frontpage_widget_2'); ?>
        </div>
      <?php endif; ?>
    </section>
  </div>
</main>
<?php get_footer(); ?>
