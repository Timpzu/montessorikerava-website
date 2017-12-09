<?php /* Template Name: Toiminta */ ?>
<?php get_header('page'); ?>
<main class="container-fluid">
  <div class="row justify-content-center">
    <section class="col-md-6">
      <?php
        if (have_posts()) :
          while (have_posts()) : the_post(); ?>
            <?php the_content() ?>
          <?php endwhile;
        else :
          echo "<p>Sisältöä ei löytynyt.</p>";
        endif;
       ?>
    </section>
  </div>
  <?php if( have_rows('haitarit') ): ?>
      <?php while( have_rows('haitarit') ): the_row();
        $heading = get_sub_field('heading');
        $content = get_sub_field('content');
      ?>
      <div class="row justify-content-center">
        <div class="col-md-6 haitari">
          <h3 role="button" tabindex="0" aria-pressed="false" onclick="handleBtnClick(event)" onKeyPress="handleBtnKeyPress(event)">
            <?php echo $heading; ?>
            <i class="material-icons">arrow_drop_down</i>
          </h3>
          <p><?php echo $content; ?></p>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
