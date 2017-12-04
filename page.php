<?php get_header(); ?>
<main>
  <div class="container-fluid">
    <div class="row">
      <section class="col-md-6 offset-md-3">
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
  </div>
</main>
<?php get_footer(); ?>
