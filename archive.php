<?php 
/**
 * Generic template for Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage k9_Theme
 */
 
get_header(); ?>

	<div id="content">

		<?php the_post(); ?>

			<h2 class="page-title">     
			<?php if ( is_category() ) : ?>
				Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category
			<?php elseif ( is_tag() ) : ?>
				Tag Archive for &#8216;<?php single_tag_title(); ?>&#8217;
			<?php elseif ( is_day() ) : ?>
				Daily Archive for <?php the_time('F jS, Y'); ?>
			<?php elseif ( is_month() ) : ?>
				Monthly Archive for <?php the_time('F, Y'); ?>
			<?php elseif ( is_year() ) : ?>
				Yearly Archive for <?php the_time('Y'); ?>
			<?php elseif ( is_author() ) : ?>
				Author Archive for <?php the_author(); ?>
			<?php else : ?>
				Blog Archives
			<?php endif; ?> 
			</h2>

		<?php rewind_posts(); ?>

		<?php while ( have_posts() ) : the_post(); ?>

		<?php the_date('d M Y', '<div class="date">', '</div>'); ?>

			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

				<h3 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

				<div class="entry-content">
					<?php the_excerpt(); ?>
				</div> <!-- END .entry-content -->

				<div class="entry-meta">
					<div class="published"><span class="value-title" title="<?php the_time('Y-m-d\TH:i:sO'); ?>"> </span><?php the_time(); ?></div>
					<div class="author vcard">By <a class="url fn n" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></div>
					<div class="categories"><h3>Categories</h3> <?php the_category(); ?></div>
					<?php the_tags('<div class="tags"><h3>Tags</h3><ul><li>', '</li><li>', '</li></ul></div>'); ?>
					<?php if ( !post_password_required() ) : ?>
						<div class="comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>
					<?php endif; ?>
					<?php edit_post_link('Edit this', '<div class="edit-this">', '</div>'); ?>
				</div> <!-- END .entry-meta -->
				
			</div> <!-- END .hentry -->

		<?php endwhile; ?>

			<div class="navigation">
				<div class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></div>
				<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></div>
			</div>

		<?php if ( !have_posts() ) : ?>

			<div class="error404">

				<h2 class="entry-title">No posts found</h2>
								 
				<div class="entry-content">
					<p>Sorry, no posts matched your criteria.</p>
				</div>

			</div> <!-- END .error404 -->  

		<?php endif; ?>

	</div> <!-- END #content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
