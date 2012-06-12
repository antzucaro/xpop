<?php 
/**
 * The template used to display image type attachments.
 *
 * @package WordPress
 * @subpackage k9_Theme
 */
 
get_header(); ?>

    <!-- SINGLE POST
    ================================================== -->
    <div class="container xonborder">
      <div class="row">
        <div class="span8">

          <?php if ( have_posts() ) : the_post(); ?>
          <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

            <h2 class="entry-title"><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2>
            <a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image($post->ID, 'medium'); ?></a>
            <?php the_content(); ?>

            <div class="postdate">
              <i>Posted on <?php the_date('l, F j, Y'); ?> by <a class="url fn n" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></i>
            </div>

            <div class="tags">
              <?php the_tags('<span class="label">', '</span>&nbsp;<span class="label">', '</span>'); ?>
            </div>

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
