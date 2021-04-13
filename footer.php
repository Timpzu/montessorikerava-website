<footer class="container-fluid footer-main">
  <div class="row justify-content-center">
    <section class="col-lg-6 col-md-8">
      <h4><a href="<?php echo get_permalink(get_theme_mod('mkw_footer_heading_link')); ?>">Yhteystiedot</a></h4>
      <ul id="footer-contacts">
        <li><?php echo get_theme_mod('mkw_footer_name'); ?></li>
        <li><?php echo get_theme_mod('mkw_footer_address'); ?></li>
        <li><?php echo get_theme_mod('mkw_footer_phone'); ?></li>
        <li><?php echo get_theme_mod('mkw_footer_email'); ?></li>
      </ul>
      <p>
        <?php echo get_theme_mod('mkw_footer_open'); ?>
      </p>
      <nav id="footer-nav" aria-label="Alaviitteen navigaatio">
        <?php
          $args = array(
            'theme_location' => 'footer'
          );
        ?>
        <?php wp_nav_menu($args); ?>
      </nav>
    </section>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
