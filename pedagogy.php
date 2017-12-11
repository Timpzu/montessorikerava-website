<?php /* Template Name: Pedagogiikka */ ?>
<?php get_header('page'); ?>
<main class="container-fluid chess">
  <div class="row justify-content-center">
    <section class="col-lg-6 col-md-8">
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
  <?php if( have_rows('pedagogiikka') ): ?>
    <?php while( have_rows('pedagogiikka') ): the_row();
      $heading = get_sub_field('heading');
      $content = get_sub_field('content');
       ?>
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <h3><?php echo $heading; ?></h3>
          <p><?php echo $content; ?></p>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
