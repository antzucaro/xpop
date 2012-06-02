<?php
/*
Template Name: Homepage_NoContent
*/
?>

<?php get_header(); ?>

          <?php if ( have_posts() ) : the_post(); ?>
            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
              <?php remove_filter('the_content','wpautop'); ?>
              <?php the_post_thumbnail(array(150, 150), array('class' => 'alignright')); ?>
              <?php the_content(); ?>
            </div>
          <?php else : ?>
              <div class="error404">
              <h2 class="entry-title">No pages found</h2>
                <div class="entry-content">
                  <p>Sorry, no pages matched your criteria.</p>
                </div>
              </div> <!-- END .error404 -->
          <?php endif; ?>
        </div> <!-- END SPAN8 -->

<?php get_footer(); ?>
