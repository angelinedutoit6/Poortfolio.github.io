<?php 
get_header();
?>
<div class="container">
<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post(); 

    the_content();

    the_field('address', get_the_ID());
  }
}
?>
</div>
<?php 
get_footer();
?>