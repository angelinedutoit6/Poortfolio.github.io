<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body>
<header>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
      </div>
      <div class="col-sm-6">
        <nav>
          <?php
            wp_nav_menu( array('theme_location' => 'main') );
          ?>
        </nav>
      </div>
    </div>
  </div>
</header>
