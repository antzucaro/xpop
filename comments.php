<?php
/**
 * The template used to display Comments
 *
 * The area of the page that contains both current comments
 * and the comment form.  The actual display of comments is
 * handled by a callback to custom_comment which is
 * located in the functions.php file
 *
 * @package WordPress
 * @subpackage k9_Theme
 */

if ( post_password_required() )
return;
?>

<?php if ( comments_open() || pings_open() ) : ?>
	<div class="entry-comment-meta">
		<p>
		<?php if ( comments_open() ) : ?>
			<?php post_comments_feed_link('Comments <abbr title="Really Simple Syndication">RSS</abbr> feed'); ?>
		<?php endif; ?>

		<?php if ( pings_open() ) : ?>
			<a href="<?php trackback_url() ?>" rel="trackback"><?php _e('TrackBack <abbr title="Universal Resource Locator">URL</abbr>'); ?></a>
		<?php endif; ?>
		</p>
	</div>
<?php endif; ?>

<?php if ( have_comments() ) : ?>

	<div id="entry-comment">
		
		<h3 id="comments"><?php comments_number('No Comments', 'One Comment', '% Comments' ); ?></h3>
		<ol class="commentlist">
			<?php wp_list_comments(array('callback' => 'custom_comment')); ?>
		</ol> <!-- END .commentlist -->

		<div class="navigation">
			<div class="alignleft"><?php previous_comments_link(); ?></div>
			<div class="alignright"><?php next_comments_link(); ?></div>
			<?php //paginate_comments_links(array('prev_text' => '&laquo; Older Comment', 'next_text' => 'Newer Comment &raquo;')); ?> 
		</div>
		
	</div> <!-- END #entry-comment -->	

<?php else : // this is displayed if there are no comments so far ?>

<?php endif; ?>

<?php if ( comments_open() ) : ?>

	<div id="respond">

		<h3><?php comment_form_title('Leave a Reply', 'Leave a Reply to %s'); ?></h3>

		<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>

			<p>You must be <a href="<?php echo wp_login_url(get_permalink()); ?>">logged in</a> to post a comment.</p>

		<?php else : ?>

		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

			<?php if ( is_user_logged_in() ) : ?>

				<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

			<?php else : ?>

				<p><input class="text" type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" />
				<label for="author">Name <?php if ($req) echo "(required)"; ?></label></p>

				<p><input class="text" type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" />
				<label for="email">Mail (will not be published) <?php if ($req) echo "(required)"; ?></label></p>

				<p><input class="text" type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" />
				<label for="url">Website</label></p>

			<?php endif; ?>

				<p>You can use these tags: <code><?php echo allowed_tags(); ?></code></p>
				<p><textarea name="comment" id="comment" cols="58" rows="10"></textarea></p>
				<p><input class="button" name="submit" type="submit" id="submit" value="Submit Comment" /> &nbsp; <span class="cancel-comment-reply"><?php cancel_comment_reply_link('Cancel Reply'); ?></span> 
				<?php comment_id_fields(); ?></p>

				<?php do_action('comment_form', $post->ID); ?>

		</form>

		<?php endif; ?>

	</div> <!-- END #respond -->

<?php endif; ?>