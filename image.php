<?php 
/**
 * The template used to display image type attachments.
 *
 * @package WordPress
 * @subpackage k9_Theme
 */
 
get_header(); ?>

	<div id="content">

		<?php if ( have_posts() ) : the_post(); ?>

		<?php the_date('d M Y', '<div class="date">', '</div>'); ?>

			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

			<h2 class="entry-title"><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2>

				<div class="entry-content">         
					<div class="attachment">
					<dl class="attachment-item">
						<dt class="attachment-icon">
							<a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image($post->ID, 'medium'); ?></a>
						</dt>
						<?php if ( !empty($post->post_excerpt) ) : ?> 
							<dd class="attachment-caption">
								<?php the_excerpt(); ?>
							</dd>
						<?php endif; ?>
					</dl>      
					</div>          

					<?php the_content(); ?>
				</div> <!-- END .entry-content -->

				<div class="entry-meta">
					<div class="published"><span class="value-title" title="<?php the_time('Y-m-d\TH:i:sO'); ?>"> </span><?php the_time(); ?></div>
					<div class="author vcard">By <a class="url fn n" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></div>
					<div class="categories"><h3>Categories</h3> <?php the_category(); ?></div>
					<?php the_tags('<div class="tags"><h3>Tags</h3><ul><li>', '</li><li>', '</li></ul></div>'); ?>
					<?php edit_post_link('Edit this', '<div class="edit-this">', '</div>'); ?>
				</div> <!-- END .entry-meta -->

				</div> <!-- END .hentry -->

				<div class="navigation">
					<div class="alignleft"><?php previous_image_link(); ?></div>
					<div class="alignright"><?php next_image_link(); ?></div>
				</div>

		<?php else: ?>

			<div class="error404">

				<h2 class="entry-title">No attachments found</h2>
					 
				<div class="entry-content">
				<p>Sorry, no attachments matched your criteria.</p>
				</div>

			</div> <!-- END .error404 -->

		<?php endif; ?>

	</div> <!-- END #content -->

<?php get_sidebar(); ?>
 
<?php get_footer(); ?>
