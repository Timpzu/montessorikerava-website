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
  <?php if( have_rows('henkilokunta') ): ?>
  	<section class="row staff">
      <h3 class="col-md-12">Henkilökunta</h3>
  	  <?php while( have_rows('henkilokunta') ): the_row();
    		$name = get_sub_field('name');
        $contact = get_sub_field('contact');
    		$title = get_sub_field('title');
    		$photo = get_sub_field('photo');
  		?>
    		<article class="col-lg-6 col-md-8 person">
          <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt'] ?>" />
          <h4><?php echo $name; ?></h4>
          <span><?php echo $contact; ?></span>
          <p><?php echo $title; ?></p>
    		</article>
      <?php endwhile; ?>
    </section>
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
