<?php 
/**
 * @package WordPress
 * @subpackage k9_Theme
 */
 
/*
Template Name: Blog Links
*/

get_header(); ?>

	<div id="content">

	<?php the_post(); ?>

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

			<div class="entry-content">
				<h2>Top Links from Xonotic.org</h2>
				<?php aklh_show_harvest(50); ?>
				<?php the_content(); ?>
			</div> <!-- END .entry-content -->
			 
			<?php edit_post_link('Edit this', '<div class="entry-meta"><div class="edit-this">', '</div></div>'); ?>
					
		</div> <!-- END .hentry -->

	</div> <!-- END #content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
