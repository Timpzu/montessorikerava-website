<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600|Open+Sans:400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <nav class="container-fluid" id="main-nav">
      <div class="col-md-6 offset-md-3">
        <button onclick="menuBtn()" class="nav-btn"><i class="material-icons">menu</i></button>
        <ul class="resposive-nav" id="topnav">
          <li><a href="#">Lorem</a></li>
          <li><a href="#">Ipsum</a></li>
          <li><a href="#">Septum</a></li>
          <li><a href="#">Laudatum</a></li>
        </ul>
    </nav>
