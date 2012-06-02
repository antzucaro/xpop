<?php 
/**
 * @package WordPress
 * @subpackage k9_Theme
 */

/*
Template Name: Archives
*/

get_header(); ?>

	<div id="content">

	<?php the_post(); ?>

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

			<h2 class="entry-title"><?php the_title(); ?></h2>

			<div class="entry-content">
				<?php the_content(); ?>

				<h3>Archives by Month:</h3>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>

				<h3>Archives by Subject:</h3>
				<ul>
					<?php wp_list_categories(); ?>
				</ul>
			</div> <!-- END .entry-content -->

			<?php edit_post_link('Edit this', '<div class="entry-meta"><div class="edit-this">', '</div></div>'); ?>
			
		</div> <!-- END .hentry -->

	</div> <!-- END #content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
