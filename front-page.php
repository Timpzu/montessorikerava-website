<?php get_header(); ?>
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
    <?php if( have_rows('comments') ): ?>
      <div class="row justify-content-center">
        <section class="col-md-6">
          <h3>Vanhempien kommentit</h3>
          <div class="w3-content w3-display-container">
            <?php while( have_rows('comments') ): the_row();
              $content = get_sub_field('comment');
              $name = get_sub_field('title');
            ?>
            <p class="mySlides"><?php echo $content; ?></p>
            <?php endwhile; ?>
            <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
          </div>
        </section>
      </div>
    <?php endif; ?>
    <?php if (is_active_sidebar('front_page_widget')) : ?>
      <div class="row justify-content-center">
        <section class="col-md-6">
          <?php dynamic_sidebar('front_page_widget'); ?>
        </section>
      </div>
    <?php endif; ?>
  </div>
  <script type="text/javascript">
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
