<?php 
/**
 * The Template used to display single posts
 *
 * @package WordPress
 * @subpackage xootstrap
 */

get_header(); ?>

    <!-- SINGLE POST
    ================================================== -->
    <div class="container xonborder">
      <div class="row">
        <div class="span8">

          <?php if ( have_posts() ) : the_post(); ?>
          <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

            <h2><?php the_title(); ?></h2>

            <div class="postdate">
              <i>Posted on <?php the_date('l, F j, Y'); ?> by <a class="url fn n" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></i>
            </div>

            <?php the_post_thumbnail(array(150, 150), array('class' => 'alignright')); ?>
            <?php the_content(); ?>
            <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

            <div class="categories">Posted in <?php the_category(','); ?></div>
            <div class="tags">
              <?php the_tags('<span class="label">', '</span>&nbsp;<span class="label">', '</span>'); ?>
            </div>

            <?php previous_post_link('<div class="previous_post"><i class="icon-arrow-left icon-white"></i> %link</div>', 'Previous Post') ?>
            <?php next_post_link('<div class="next_post">%link <i class="icon-arrow-right icon-white"></i></div>', 'Next Post') ?>
          <?php else : ?>
            <h2 class="entry-title">No posts found</h2>
            <div class="entry-content"> <p>Sorry, no posts matched your criteria.</p> </div>
          <?php endif; ?>
          </div>
        </div> <!-- END span8 -->

        <div class="span4">
          <?php get_sidebar(); ?>
        </div> <!-- END span4 -->
      </div> <!-- END row -->
    </div> <!-- END container -->

    <?php get_footer(); ?>


  </div> <!-- END #content -->
