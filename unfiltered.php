<?php
/*
Template Name: Unfiltered
*/
?>

<?php get_header(); ?>

  <?php if ( have_posts() ) : the_post(); ?>
    <?php remove_filter ('the_content','wpautop'); ?>
    <?php the_content(); ?>
  <?php endif; ?>

<?php get_footer(); ?>
