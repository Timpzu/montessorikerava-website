<?php get_header(); ?>
<header class="main-header" style="background-image:url(<?php header_image(); ?>);">
  <div class="container-fluid header-heading">
    <div class="row align-items-center">
      <section class="col-md-5 offset-md-3" id="intro">
        <h1>Auta minua tekemään itse.</h1>
        <button type="button" name="button" class="btn-green">Hae paikkaa</button>
      </section>
    </div>
  </div>
</header>
<main class="container-fluid chess">
  <div class="row">
    <section class="col-md-6 offset-md-3" id="about">
      <h3>Montessoripäiväkoti keravalla</h3>
      <p>
        Montessoripäiväkoti Mio tarjoaa laadukasta varhaiskasvatusta ja
        esiopetusta 1,5 - 6-vuotiaille keravalaisille ja lähikuntien lapsille.
        Montessoripedagogiikka on aatteellisesti sitoutumaton kasvatusmenetelmä,
        jossa lapsi kohdataan yksilönä ja hän saa oppia omassa tahdissaan
        rauhallisessa ympäristössä. Päiväkotia ylläpitää voittoa tavoittelematon
        Keravan Montessoripäiväkodin kannatusyhdistys ry ja kaikki toiminnan
        tuotot käytetään päiväkodin lasten hyväksi.
      </p>
    </section>
  </div>
  <div class="row">
    <section class="col-md-6 offset-md-3">
      <h3>Vanhempien suositukset</h3>
      <div class="fill"></div>
    </section>
  </div>
  <div class="row">
    <section class="col-md-6 offset-md-3">
      <?php if (is_active_sidebar('some_widget')) : ?>
        <div class="widget_container">
          <?php dynamic_sidebar('some_widget'); ?>
        </div>
      <?php endif; ?>
    </section>
  </div>
</main>
<?php get_footer(); ?>
