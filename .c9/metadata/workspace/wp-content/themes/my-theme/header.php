{"filter":false,"title":"header.php","tooltip":"/wp-content/themes/my-theme/header.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":24,"column":0},"action":"insert","lines":["<!DOCTYPE html>","<html <?php language_attributes(); ?> class=\"no-js no-svg\">","<head>","  <meta charset=\"<?php bloginfo( 'charset' ); ?>\">","  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","  <?php wp_head(); ?>","</head>","<body>","<header>","  <div class=\"container\">","    <div class=\"row\">","      <div class=\"col-sm-6\">","        <img class=\"logo\" src=\"<?php echo get_template_directory_uri(); ?>/assets/img/logo.png\" alt=\"\">","      </div>","      <div class=\"col-sm-6\">","        <nav>","          <?php","            wp_nav_menu( array('theme_location' => 'main') );","          ?>","        </nav>","      </div>","    </div>","  </div>","</header>",""],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":24,"column":0},"end":{"row":24,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1548494148404,"hash":"7f4f7663972740c24adffdbc86244f8f77a69f9d"}