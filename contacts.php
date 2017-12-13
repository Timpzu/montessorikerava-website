<?php /* Template Name: Yhteystiedot */ ?>
<?php get_header('page'); ?>
<main class="container-fluid">
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
  <?php if( have_rows('staff') ): ?>
  	<div class="row justify-content-center">
      <section id="staff" class="col-lg-6 col-md-8">
        <h3><?php the_field('heading'); ?></h3>
        <div class="row">
          <?php while( have_rows('staff') ): the_row();
        		$name = get_sub_field('name');
        		$title = get_sub_field('title');
        		$photo = get_sub_field('photo');
      		?>
            <article class="col-sm-6 col-xs-12 person">
              <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt'] ?>" />
              <h4><?php echo $name; ?></h4>
              <?php echo $title; ?>
        		</article>
          <?php endwhile; ?>
        </div>
      </section>
    </div>
  <?php endif; ?>
  <?php if (is_active_sidebar('contact_widget')) : ?>
    <div class="row justify-content-center">
      <section class="col-lg-6 col-md-8">
        <?php dynamic_sidebar('contact_widget'); ?>
      </section>
    </div>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
