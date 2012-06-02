<?php 
/*
Template Name: Calendar
*/
 
get_header(); ?>

	<div id="content">

	<?php if ( have_posts() ) : the_post(); ?>

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

			<h2 class="entry-title"><?php the_title(); ?></h2>
			
				<div class="entry-content">
					<?php the_post_thumbnail(array(150, 150), array('class' => 'alignright')); ?>
					<?php the_content(); ?>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</div> <!-- END .entry-content -->
			 
				<?php edit_post_link('Edit this', '<div class="entry-meta"><div class="edit-this">', '</div></div>'); ?>
		</div> <!-- END .hentry -->

		<?php comments_template(); ?>

	<?php else : ?>

		<div class="error404">

		<h2 class="entry-title">No pages found</h2>
						
			<div class="entry-content">
				<p>Sorry, no pages matched your criteria.</p>
			</div>

		</div> <!-- END .error404 -->

	<?php endif; ?>
			
	</div> <!-- END #content -->

<?php get_footer(); ?>
