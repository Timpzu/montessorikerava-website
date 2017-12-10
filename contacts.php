<?php /* Template Name: Yhteystiedot */ ?>
<?php get_header('page'); ?>
<main>
  <div class="container-fluid">
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
    <?php if( have_rows('henkilokunta') ): ?>
    	<div class="row justify-content-center">
    	  <?php while( have_rows('henkilokunta') ): the_row();
      		$name = get_sub_field('name');
          $contact = get_sub_field('contact');
      		$title = get_sub_field('title');
      		$photo = get_sub_field('photo');
    		?>
    		<div class="col-md-3 person">
          <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt'] ?>" />
          <h4><?php echo $name; ?></h4>
          <span><?php echo $contact; ?></span>
          <p><?php echo $title; ?></p>
    		</div>
    	<?php endwhile; ?>
    </div>
    <?php endif; ?>
    <?php if (is_active_sidebar('contact_widget')) : ?>
      <div class="row justify-content-center">
        <section class="col-md-6">
          <?php dynamic_sidebar('contact_widget'); ?>
        </section>
      </div>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
