<?php

function my_scripts() {
   wp_enqueue_style('my-styles', get_template_directory_uri() . '/assets/css/main.css', 1.0);
    wp_enqueue_style('my-styles', get_template_directory_uri() . '/assets/css/portfolio.css', 1.0);
    wp_enqueue_style('hind-font', 'https://fonts.googleapis.com/css?family=Hind:400,600', 1.0);
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', 1.0);
    wp_enqueue_script('my-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );

}
add_action('wp_enqueue_scripts', 'my_scripts');

register_nav_menus( array(
  'main' => 'Menu principal',
  'footer' => 'Menu footer',
) );

function my_shortcode( $atts, $content = null ) {
  extract(shortcode_atts(array(
    'name'    => '',
  ), $atts));

  return 'Hello '.$name;
}
add_shortcode('my_shortcode', 'my_shortcode');



function portfolio_setup_post_type() {
$portfolio = array(
'public'=> true,
'label' => __( 'portfolio', 'textdomain' ),
'menu_icon' => 'dashicons-portfolio',
);
register_post_type( 'portfolio', $portfolio );
}
add_action( 'init', 'portfolio_setup_post_type' );


?>
