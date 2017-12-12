<?php get_header(); ?>
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
  <?php if( have_rows('comments') ): ?>
    <div class="row justify-content-center comments">
      <section class="col-lg-6 col-md-8">
        <h3>Vanhempien kommentit</h3>
        <div class="comments-carousel">
          <?php while( have_rows('comments') ): the_row();
            $content = get_sub_field('comment');
            $name = get_sub_field('title');
          ?>
          <p class="mySlides">“<cite><?php echo $content; ?></cite>”</p>
          <?php endwhile; ?>
          <button class="material-icons carousel-btn carousel-btn-left" onclick="plusDivs(-1)">keyboard_arrow_left</button>
          <button class="material-icons carousel-btn carousel-btn-right" onclick="plusDivs(+1)">keyboard_arrow_right</button>
        </div>
      </section>
    </div>
  <?php endif; ?>
  <?php if (is_active_sidebar('front_page_widget')) : ?>
    <div class="row justify-content-center">
      <section class="col-lg-6 col-md-8">
        <?php dynamic_sidebar('front_page_widget'); ?>
      </section>
    </div>
  <?php endif; ?>
  <script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length} ;
      for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
      }
      x[slideIndex-1].style.display = "block";
    }
  </script>
</main>
<?php get_footer(); ?>
