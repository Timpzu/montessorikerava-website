<?php /* Template Name: Päivähoito */ ?>
<?php get_header('page'); ?>
<main class="container-fluid">
  <div class="row justify-content-center">
    <section class="col-md-6">
      <?php
        if (have_posts()) :
          while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
       <?php endwhile;
       else :
         echo "<p>Sisältöä ei löytynyt.</p>";
       endif;
       ?>
    </section>
  </div>
  <?php if (is_active_sidebar('daycare_widget')) : ?>
    <div class="row justify-content-center">
      <section class="col-md-6">
        <?php dynamic_sidebar('daycare_widget'); ?>
      </section>
    </div>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
