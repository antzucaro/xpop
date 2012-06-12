<?php
/**
 * The template used to display search results
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
          <?php if ( have_posts() ) : ?>
            <h2>Search Results for <span id="search-terms"><?php the_search_query(); ?></span></h2>
            <?php while ( have_posts() ) : the_post(); ?>
              <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <h3 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                <div class="postdate">
                  <i>Posted on <?php the_date('l, F j, Y'); ?> by <a class="url fn n" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> in <?php the_category(','); ?></i>
                </div>

                <div class="tags">
                  <?php the_tags('<span class="label">', '</span>&nbsp;<span class="label">', '</span>'); ?>
                </div>

                <div style="border-bottom:1px solid #222;"></div>

              </div>
            <?php endwhile; ?>

          <?php else : ?>
            <h2>No pages found</h2>
            <p>Sorry, no pages matched your criteria.</p>
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
