<?php 
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage xpop
 */

get_header(); ?>

    <!-- MAIN INDEX
    ================================================== -->
    <div class="container xonborder">
      <div class="row">
        <div class="span8">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
              <h2><a href="<?php the_permalink(); ?>" title="view this post"><?php the_title(); ?></a></h2>

              <div class="postdate">
                <i>Posted on <?php the_date('l, F j, Y'); ?> by <a class="url fn n" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></i>
              </div>

              <?php the_post_thumbnail(array(150, 150), array('class' => 'alignright')); ?>
              <?php the_excerpt(); ?>
              <!-- <?php the_content('Read the rest of this entry &raquo;'); ?> -->

              <div class="categories">Posted in <?php the_category(','); ?></div>

              <div class="tags">
                <?php the_tags('<span class="label">', '</span>&nbsp;<span class="label">', '</span>'); ?>
              </div>
            </div>
          <?php endwhile; ?>
          <div class="previous_post"><?php next_posts_link('&laquo; Older Entries'); ?></div>
          <div class="next_post"><?php previous_posts_link('Newer Entries &raquo;'); ?></div>

        <?php else : ?>
            <h2 class="entry-title">Not Found</h2>
            <div class="entry-content"> <p>Sorry, but you are looking for something that isn't here.</p> </div>
        <?php endif; ?>

        </div> <!-- END SPAN8 -->
        <div class="span4">
          <?php get_sidebar(); ?>
        </div>
      </div> <!-- END ROW -->
    </div> <!-- END CONTAINER -->

    <!-- SIDEBAR AND FOOTER
    ================================================== -->
    <?php get_footer(); ?>
