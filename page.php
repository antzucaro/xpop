<?php
/**
 * The template used to display Pages
 *
 * @package WordPress
 * @subpackage xpop
 */

get_header(); ?>

    <!-- SINGLE PAGE
    ================================================== -->
    <div class="container xonborder">
      <div class="row">

        <!-- MAIN AREA
        ================================================== -->
        <div class="span8">
          <?php if ( have_posts() ) : the_post(); ?>
            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
              <h2 class="entry-title"><?php the_title(); ?></h2>
              <?php the_post_thumbnail(array(150, 150), array('class' => 'alignright')); ?>
              <?php the_content(); ?>
              <?php comments_template(); ?>
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

        <!-- SIDEBAR
        ================================================== -->
        <div class="span4">
          <?php get_sidebar(); ?>
        </div> <!-- END SPAN4 -->
      </div> <!-- END ROW -->
    </div> <!-- END CONTAINER -->

<?php get_footer(); ?>
