<footer class="container-fluid footer-main">
  <div class="row">
    <section class="col-md-6 offset-md-3">
      <h4>Yhteystiedot</h4>
      <ul id="footer-contacts">
        <li>Montessoripäiväkoti Mio</li>
        <li>Kääpäkatu 5, 04260 Kerava</li>
        <li>Puhelin: 040 527 2456</li>
        <li>Sähköposti: info@montessorikerava.fi</li>
        <li>Auki arkipäivisin klo 7-17</li>
      </ul>
    </section>
    <nav class="col-md-6 offset-md-3" id="footer-nav">
      <?php
        $args = array(
          'theme_location' => 'footer'
        );
      ?>
      <?php wp_nav_menu($args); ?>
    </nav>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
