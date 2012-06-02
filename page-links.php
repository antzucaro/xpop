<?php 
/**
 * @package WordPress
 * @subpackage k9_Theme
 */
 
/*
Template Name: Links
*/

get_header(); ?>

	<div id="content">

	<?php the_post(); ?>

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

			<div class="entry-content">
				<?php //wp_list_bookmarks('title_li=&title_before=<h3>&title_after=</h3>&category_before=&category_after='); ?>
				<?php the_content(); ?>
			</div> <!-- END .entry-content -->
			 
			<?php edit_post_link('Edit this', '<div class="entry-meta"><div class="edit-this">', '</div></div>'); ?>
					
		</div> <!-- END .hentry -->

	</div> <!-- END #content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
